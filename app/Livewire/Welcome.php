<?php

namespace App\Livewire;

use Livewire\Component;

class Welcome extends Component
{
    public $receivedMessage = '';
    public $message = "Welcome to Livewire!";

    protected $listeners = ['messageSent' => 'handleMessage'];

    public function render()
    {
        return view('livewire.welcome');
    }

    public function handleMessage($message)
    {
        // Do something with $message (e.g., update a property)
        $this->receivedMessage = $message;
    }
}
