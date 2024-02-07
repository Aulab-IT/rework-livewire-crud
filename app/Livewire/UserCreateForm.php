<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\Validate;

class UserCreateForm extends Component
{
    #[Validate('required')] 
    public $name;

    #[Validate('required|email')] 
    public $email;

    #[Validate('required')] 
    public $password;

    public function store()
    {
        $this->validate();

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => bcrypt($this->password),
        ]);

        $this->reset();

        $this->dispatch('user-created')->to('users-list');
    }

    public function render()
    {
        return view('livewire.user-create-form');
    }
}
