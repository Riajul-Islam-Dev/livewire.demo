<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class CreateUser extends Component
{
    public $name;
    public $email;
    public $password;

    public function submitForm()
    {
        try {
            $this->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|string|min:8',
            ]);

            User::create([
                'name' => $this->name,
                'email' => $this->email,
                'password' => Hash::make($this->password),
            ]);

            session()->flash('success', 'User created successfully!');

            // Clear form fields
            $this->reset(['name', 'email', 'password']);
        } catch (\Exception $e) {
            session()->flash('error', 'Something went wrong. Please try again!');
        }
    }

    public function render()
    {
        return view('livewire.create-user');
    }
}
