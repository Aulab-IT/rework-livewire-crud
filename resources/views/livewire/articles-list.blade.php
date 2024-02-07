<div class="col-12">
    @if($articles->count())
        <table class="table table-striped border">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Titolo</th>
                    <th scope="col">Sottotitolo</th>
                    <th scope="col">Creato il</th>
                    <th scope="col">Azioni</th>
                </tr>
            </thead>
            <tbody>
                @foreach($articles as $article)
                    <tr>
                        <th scope="row">{{ $article->id }}</th>
                        <td>{{ $article->title }}</td>
                        <td>{{ $article->subtitle }}</td>
                        <td>{{ $article->created_at->format('d-m-Y') }}</td>
                        <td class="d-flex justify-content-between">
                            <a href="{{ route('article.edit', compact('article')) }}" class="text-secondary">
                                <i class="fa-regular fa-pen-to-square"></i>
                            </a>
                            <a href="/article/delete" wire:click.prevent="destroy({{ $article->id }})" class="text-secondary">
                                <i class="fa-regular fa-trash-can"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p class="fs-3 text-center">Nessun articolo presente</p>
    @endif
</div>
