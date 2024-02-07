<div class="col-12">
    @if($articles->count())
        <table class="table striped">
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
                        <td>Azioni</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p class="fs-3 text-center">Nessun articolo presente</p>
    @endif
</div>
