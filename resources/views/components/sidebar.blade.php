<div class="offcanvas offcanvas-start show z-0 pt-5" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvas" aria-labelledby="offcanvasLabel" style="width: 150px; border: transparent;">
    <nav class="d-flex flex-column flex-shrink-0 p-3 bg-body-tertiary vh-100 pt-5">
        <ul class="nav nav-pills flex-column mb-auto pt-3">
          <li class="nav-item">
            <a href="{{ route('homepage') }}" class="nav-link {{ Route::is('homepage') ? 'active' : '' }}" aria-current="page">
              Home
            </a>
          </li>
          <li>
            <a href="#" class="nav-link link-body-emphasis">
                Articoli
            </a>
          </li>
          <li>
            <a href="#" class="nav-link link-body-emphasis">
                Utenti
            </a>
          </li>
        </ul>
    </nav>
</div>