<?php

namespace App\Http\Livewire;

use Illuminate\Foundation\Auth\User;
use Livewire\Component;

class UserAccount extends Component
{
    public function render()
    {
        $users = User::get();
        $data = compact('users');
        return view('livewire.user-account', $data);
    }
}
