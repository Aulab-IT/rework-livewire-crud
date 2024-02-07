<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\On; 

class UsersList extends Component
{
    #[On('user-created')] 
    public function render()
    {
        $users = User::all();
        return view('livewire.users-list', compact('users'));
    }
}
