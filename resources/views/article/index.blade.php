<x-layouts.app>
    <div class="container my-5">
        <div class="row justify-content-end mb-3 pb-3 border-bottom">
            <div class="col-12 col-md-2">
                <a href="{{ route('article.create') }}" class="btn btn-dark w-100">Crea Articolo</a>
            </div>
        </div>
        <div class="row justify-content-center">
            {{-- COMPO LIVEWIRE --}}
            @livewire('articles-list')
        </div>
    </div>
</x-layouts.app>