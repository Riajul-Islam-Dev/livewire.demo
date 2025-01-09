<?php

namespace App\Livewire;

use Livewire\Component;

class Welcome extends Component
{
    public $message = "Welcome to Livewire!";

    public function render()
    {
        return view('livewire.welcome');
    }
}
