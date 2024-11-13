<?php

namespace App\Livewire\User;

use App\Models\User;
use Livewire\Component;


class UserList extends Component
{
    

    public function render()
    {
        $users = User::latest()->with('info')->paginate(12);
        return view('livewire.user.user-list', compact('users'));
    }

}
