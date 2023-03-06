<div class="fixed-top d-flex justify-content-between align-items-center bg-light shadow-sm border-bottom px-4 px-lg-5 py-3 py-lg-3">
    <div>
        <a href="{{ route('home') }}">
            <img src="{{ asset('img/svg/logo-movil.svg') }}" alt="Logo" class="img-fluid d-lg-none">
            <img src="{{ asset('img/svg/logo.svg') }}" alt="Logo" class="img-fluid d-none d-lg-block">
        </a>
    </div>
    <div class="d-none d-lg-block">
        <ul class="nav">
            <li class="nav-item">
                <a href="{{ route('colegio') }}" class="nav-link link-secondary">EL COLEGIO</a>
            </li>
            <li class="nav-item">
                <a href="#policonsultorio" class="nav-link link-secondary">FARMACIAS</a>
            </li>
            <li class="nav-item">
                <a href="#especialidades" class="nav-link link-secondary">NOVEDADES</a>
            </li>
            <li class="nav-item">
                <a href="#contacto" class="nav-link link-secondary">CONTACTO</a>
            </li>
            <li class="nav-item ms-3">
                <a href="{{ route('turno') }}" class="nav-link link-light btn btn-primary fw-bold"><i class="bi bi-bell-fill me-1"></i> FARMACIAS DE TURNO</a>
            </li>
        </ul>
    </div>
    <div class="d-lg-none">
        <i class="bi bi-list text-dark fs-2" data-bs-target="#canvasMenu" data-bs-toggle="offcanvas" aria-controls="canvasMenu"></i>
    </div>
</div>