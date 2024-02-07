<form class="border rounded p-5" wire:submit="store">

    @if(session('message'))
        <div class="alert alert-success text-center">
            {{ session('message') }}
        </div>
    @endif

    <div class="mb-3">
        <label for="title" class="form-label">Titolo articolo</label>
        <span class="text-danger">Il mio titolo e' {{ $title }}</span>
        <input type="text" wire:model.live="title" class="form-control" id="title">
    </div>
  
    <div class="mb-3">
        <label for="subtitle" class="form-label">Sottotitolo articolo</label>
        <input type="text" wire:model.live="subtitle" class="form-control" id="subtitle">
    </div>
  
    <div class="mb-5">
        <label class="form-label" for="content">Corpo del testo</label>
        <textarea wire:model.live="content" id="content" cols="30" rows="10" class="form-control"></textarea>
    </div>
  
    <div class="d-flex justify-content-end">
        <button type="submit" class="btn btn-dark">Crea Articolo</button>
    </div>
</form>