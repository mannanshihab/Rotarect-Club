<?php

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rule;
use Livewire\Volt\Component;
use Livewire\WithFileUploads;

new class extends Component
{
    use WithFileUploads;
    public string $name = '';
    public string $email = '';
    public $designation = '';
    public $phone = '';
    public $avatar = '';
    public $facebook = '';
    public $twitter = '';
    public $whatsapp = '';
    public $date_of_birth = '';
    public $gender = '';
    public $bio = '';



    /**
     * Mount the component.
     */
    public function mount(): void
    {
        $this->name = Auth::user()->name;
        $this->email = Auth::user()->email;
        $this->avatar = Auth::user()->avatar;
        $this->designation = Auth::user()->info?->designation ?? null;
        $this->phone = Auth::user()->info?->phone ?? null;
        $this->facebook = Auth::user()->info?->facebook ?? null;
        $this->whatsapp = Auth::user()->info?->whatsapp ?? null;
        $this->date_of_birth = Auth::user()->info?->date_of_birth ?? null;
        $this->gender = Auth::user()->info?->gender ?? null;
        $this->bio = Auth::user()->info?->bio ?? null;
    }

    /**
     * Update the profile information for the currently authenticated user.
     */
    public function updateProfileInformation(): void
    {
        $user = Auth::user();

        $validated = $this->validate([
            'name'  => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', Rule::unique(User::class)->ignore($user->id)],
            'phone' => ['required', 'regex:/^\+?\d{11,15}$/'],
            'bio'   => ['required', 'string', 'max:250'],
        ]);

        //dd($validated);
        $user = $user->fill($validated);

        $user->info()->updateOrCreate(
            ['user_id'  => $user->id],
            [
                'designation' => $this->designation,
                'phone'    => $this->phone,
                'facebook' => $this->facebook,
                'whatsapp' => $this->whatsapp,
                'bio'      => $this->bio,
                'date_of_birth'      => $this->date_of_birth,
            ],
        );

        if ($user->isDirty('email')) {
            $user->email_verified_at = null;
        }

        $user->save();

        $this->dispatch('profile-updated', name: $user->name);
    }

    public function updatedAvatar()
    {
        $this->validate([
            'avatar' => 'required|image|max:1024', // 1MB Max
        ]);

        $user = Auth::user();

        $upload = $this->avatar->store('uploads/Users', 'real_public');
        $user->update([
            'avatar' => $upload
        ]);

        $this->dispatch('profile-updated', name: $user->name);
    }
    /**
     * Send an email verification notification to the current user.
     */
    public function sendVerification(): void
    {
        $user = Auth::user();

        if ($user->hasVerifiedEmail()) {
            $this->redirectIntended(default: route('dashboard', absolute: false));

            return;
        }

        $user->sendEmailVerificationNotification();

        Session::flash('status', 'verification-link-sent');
    }
}; 

?>

<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Profile Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    <form wire:submit="updateProfileInformation" class="mt-6 space-y-6">
        <div>
            <x-input-label for="name" :value="__('Full Name')" />
            <x-text-input wire:model="name" id="name" name="name" type="text" class="mt-1 block w-full" required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <div>
            <x-input-label for="Designation" :value="__('Designation')" />
            <x-text-input wire:model="designation" id="designation" name="designation" type="text" class="mt-1 block w-full" autofocus autocomplete="designation" />
            <x-input-error class="mt-2" :messages="$errors->get('designation')" />
        </div>

        <div>
            <x-input-label for="phone" :value="__('Phone')" />
            <x-text-input wire:model="phone" id="phone" name="phone" type="text" class="mt-1 block w-full" autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('phone')" />
        </div>

        <div>
            <x-input-label for="bio" :value="__('Bio')" />
            <textarea wire:model="bio" id="bio" name="bio" class="mt-1 block w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-500 focus:ring-indigo-500" rows="4"></textarea>
            <x-input-error class="mt-2" :messages="$errors->get('bio')" />
        </div>

        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input wire:model="email" id="email" name="email" type="email" class="mt-1 block w-full" required autocomplete="username" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />

            @if (auth()->user() instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! auth()->user()->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-gray-800">
                        {{ __('Your email address is unverified.') }}

                        <button wire:click.prevent="sendVerification" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <div>
            <label for="file-input" class="sr-only">Choose file</label>
            <input type="file" wire:model='avatar' name="file-input" id="file-input" class="block w-full border border-gray-200 shadow-sm rounded-lg text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400
              file:bg-gray-50 file:border-0
              file:me-4
              file:py-3 file:px-4
              dark:file:bg-neutral-700 dark:file:text-neutral-400">
              <x-input-error class="mt-2" :messages="$errors->get('email')" />
        </div>

        <h2 class="text-lg font-medium text-gray-900">
            Other's Information
        </h2>

        <div>
            <x-input-label for="date_of_birth" :value="__('Date of Birth')" />
            <x-text-input wire:model="date_of_birth" id="date_of_birth" name="date_of_birth" type="date" class="mt-1 block w-full" autofocus autocomplete="bday" />
            <x-input-error class="mt-2" :messages="$errors->get('date_of_birth')" />
        </div>

        <div>
            <x-input-label for="facebook" :value="__('Facebook')" />
            <x-text-input wire:model="facebook" id="facebook" name="facebook" type="text" class="mt-1 block w-full" autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('facebook')" />
        </div>

        <div>
            <x-input-label for="whatsapp" :value="__('Whatsapp')" />
            <x-text-input wire:model="whatsapp" id="whatsapp" name="whatsapp" type="text" class="mt-1 block w-full" autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('whatsapp')" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            <x-action-message class="me-3" on="profile-updated">
                {{ __('Saved.') }}
            </x-action-message>
        </div>
    </form>
</section>
