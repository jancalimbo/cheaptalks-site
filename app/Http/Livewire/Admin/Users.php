<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;

class Users extends Component
{
    public function loadAllUsers(){
        $users = User::where('role', 'user')->get();

        return compact('users');
    }

    public function render()
    {
        return view('livewire.admin.users', $this->loadAllUsers());
    }
}
