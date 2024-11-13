<?php

namespace App\Livewire;

use App\Models\Session;
use App\Models\User;
use Illuminate\Session\SessionManager;
use Livewire\Component;

class Dashboard extends Component
{
    public $total_users = 0;
    public $total_active = 0;

    public function mount()
    {
        $this->total_users = count(User::all());
        $this->total_active = count(Session::whereNotNull('user_id')->get());
    }
    public function render()
    {
        return view('livewire.dashboard');
    }
}
