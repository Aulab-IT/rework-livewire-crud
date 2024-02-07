<div class="col-12">
    @if($users->count())
        <table class="table table-striped border">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Email</th>
                    <th scope="col">Creato il</th>
                    <th scope="col">Azioni</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <th scope="row">{{ $user->id }}</th>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->created_at->format('d-m-Y') }}</td>
                        <td class="d-flex justify-content-between">
                            <a href="" class="text-secondary">
                                <i class="fa-regular fa-pen-to-square"></i>
                            </a>
                            <a href="" class="text-secondary">
                                <i class="fa-regular fa-trash-can"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p class="fs-3 text-center">Nessun utente presente</p>
    @endif
</div>
