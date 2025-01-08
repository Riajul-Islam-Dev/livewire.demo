<div class="livewire-counter">
    <h1>Counter: {{ $count }}</h1>
    <button wire:click="increment">+</button>
    <button wire:click="decrement">-</button>

    <hr>

    <h2>User Form</h2>
    <form wire:submit.prevent="submitForm">
        <div>
            <label>Name:</label>
            <input type="text" wire:model="name" placeholder="Enter your name">
            @error('name')
                <span style="color: red">{{ $message }}</span>
            @enderror
        </div>

        <div>
            <label>Email:</label>
            <input type="email" wire:model="email" placeholder="Enter your email">
            @error('email')
                <span style="color: red">{{ $message }}</span>
            @enderror
        </div>

        <button type="submit">Submit</button>
    </form>
</div>
