<?php

namespace App\Livewire;

use Livewire\Component;

class Hello extends Component
{
    public $message = 'Good Morning!';
    public $name;

    public function render()
    {
        return view('livewire.hello');
    }

    public function refreshMessage()
    {
        $this->message = 'Message refreshed!';
        $this->dispatch('messageSent', 'Hello from child!');
    }
}
