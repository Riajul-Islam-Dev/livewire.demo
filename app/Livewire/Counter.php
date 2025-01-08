<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $count = 0;
    public $name;
    public $email;

    public function increment()
    {
        $this->count++;
    }

    public function decrement()
    {
        $this->count--;
    }

    public function submitForm()
    {
        $this->validate([
            'name' => 'required|string',
            'email' => 'required|email',
        ]);

        // Logic after form submission (e.g., store in database)
        // For now, we’ll just increment the counter.
        $this->count++;

        // Clear form fields
        $this->name = '';
        $this->email = '';
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
