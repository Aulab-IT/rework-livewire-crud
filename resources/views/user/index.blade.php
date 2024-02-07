<x-layouts.app>
    <div class="container my-5">
        <div class="row border-bottom mb-5">
            <div class="col-12">
                <h1>Utenti</h1>
            </div>
        </div>
        <div class="row justify-content-center">
            @livewire('user-create-form')

            {{-- COMPO LIVEWIRE --}}
            @livewire('users-list')
        </div>
    </div>
</x-layouts.app>