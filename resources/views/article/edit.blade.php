<x-layouts.app>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <h1 class="mb-3">Aggiorna un articolo</h1>

                @livewire('article-edit-form', ['articleId' => $article->id])
            </div>
        </div>
    </div>
</x-layouts.app>