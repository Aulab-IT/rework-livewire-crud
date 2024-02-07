<form class="border rounded p-5" wire:submit="store">

    @if(session('message'))
        <div class="alert alert-success text-center">
            {{ session('message') }}
        </div>
    @endif

    <div class="mb-3">
        <label for="title" class="form-label">Titolo articolo</label>
        <span class="text-danger">Il mio titolo e' {{ $title }}</span>
        <input type="text" wire:model.live="title" class="form-control @error('title') is-invalid @enderror" id="title">

        @error('title')
            <span class="small text-danger fst-italic">
                {{ $message }}
            </span>
        @enderror
    </div>
  
    <div class="mb-3">
        <label for="subtitle" class="form-label">Sottotitolo articolo</label>
        <input type="text" wire:model.blur="subtitle" class="form-control @error('subtitle') is-invalid @enderror" id="subtitle">
        
        @error('subtitle')
            <span class="small text-danger fst-italic">
                {{ $message }}
            </span>
        @enderror
    </div>
  
    <div class="mb-5">
        <label class="form-label" for="content">Corpo del testo</label>
        <textarea wire:model.live.debounce.250ms="content" id="content" cols="30" rows="10" class="form-control @error('content') is-invalid @enderror"></textarea>

        @error('content')
            <span class="small text-danger fst-italic">
                {{ $message }}
            </span>
        @enderror
    </div>
  
    <div class="d-flex justify-content-end">
        <button type="submit" class="btn btn-dark">Crea Articolo</button>
    </div>
</form>