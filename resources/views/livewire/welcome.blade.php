<div class="text-center mt-5">
    <h1>{{ $message }}</h1>
    <button class="btn btn-primary" wire:click="$set('message', 'Hello from Livewire!')">Change Message</button>
    <br><br>
    <a href="{{ route('create-user') }}" class="btn btn-secondary">Go to Create User Page</a>
</div>
