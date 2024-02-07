<x-layouts.app>
    <div class="container my-5">
        <div class="row justify-content-center">
            @livewire('user-create-form')

            {{-- COMPO LIVEWIRE --}}
            @livewire('users-list')
        </div>
    </div>
</x-layouts.app>