
<div>
    @include('layouts.navigation')
    <form wire:submit="create">
        <x-form-layout>
        {{ $this->form }}
        
        <button type="submit">
            Submit
        </button>
        </x-form-layout>
    </form>
    
    <x-filament-actions::modals />

</div>


