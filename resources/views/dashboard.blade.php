<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __("Let's see all Users") }}
        </h2>
    </x-slot>

    <livewire:user.user-list />
</x-app-layout>
