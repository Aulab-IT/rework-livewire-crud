<form wire:submit="store" class="mb-5 pb-5 border-bottom">
    <div class="d-flex justify-content-between align-items-end">
        <div>
            <label for="name" class="small">Nome</label>
            <input type="text" wire:model.lazy="name" class="form-control">
        </div>
        <div class="mx-2">
            <label for="email" class="small">Email</label>
            <input type="email" wire:model.lazy="email" class="form-control">
        </div>
        <div>
            <label for="password" class="small">Password</label>
            <input type="password" wire:model.lazy="password" class="form-control">
        </div>
        <div>
            <button class="btn btn-sm btn-dark mb-1">
                Crea Utente
            </button>
        </div>
    </div>
</form>