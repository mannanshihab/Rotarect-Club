<?php

namespace App\Livewire\User;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class UserList extends Component
{
    use WithPagination;
    protected $paginationTheme = 'tailwind';
    public $search = '';
    public $rows = 12;

    public function render()
    {
        if($this->search){
            $users = User::where('name', 'like', '%'.$this->search.'%')
            ->orderBy('id', 'desc')->paginate($this->rows);
            
        }else{
            $users = User::latest()->with('info')->orderBy('id', 'desc')->paginate($this->rows);
        }
        
        return view('livewire.user.user-list', compact('users'));
    }

}
