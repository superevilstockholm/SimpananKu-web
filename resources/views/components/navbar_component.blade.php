<nav class="navbar navbar-expand-lg my-0 py-1" style="backdrop-filter: blur(10px);">
    <div class="container py-0 my-0">
        <div class="navbar-brand py-0 my-0 w-lg-25 d-lg-flex justify-content-start">
            <a class="navbar-brand d-flex align-items-center fw-semibold gap-1 py-0 my-0" href="/">
                <i class="bi bi-coin text-primary"></i>
                <div class="d-flex align-items-center">
                    Simpanan<span class="text-primary">Ku</span>
                </div>
            </a>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse w-lg-50 w-100 d-lg-flex flex-row justify-content-center align-items-center" id="navbarNavAltMarkup">
            <ul class="navbar-nav text-center gap-lg-3 gap-2" style="font-size: 0.9rem !important;">
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('/') ? 'active fw-semibold' : 'fw-medium' }}" {{ request()->is('/') ? 'aria-current="page"' : '' }} href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('features') ? 'active fw-semibold' : 'fw-medium' }}" {{ request()->is('features') ? 'aria-current="page"' : '' }} href="/features">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('about') ? 'active fw-semibold' : 'fw-medium' }}" {{ request()->is('about') ? 'aria-current="page"' : '' }} href="/about">About</a>
                </li>
                {{-- Android --}}
                <li class="nav-item mt-1 mx-auto">
                    <div class="d-flex align-items-center d-lg-none gap-2">
                        <a href="/login" class="btn btn-sm border-0 d-flex align-items-center gap-1">Masuk <i class="bi bi-box-arrow-in-right"></i></i></a>
                        <a href="/register" class="btn btn-sm border-1 border-primary d-flex align-items-center gap-1 text-primary px-3 rounded-1">Daftar</i></a>
                    </div>
                </li>
            </ul>
        </div>
        {{-- Desktop --}}
        <div class="d-none d-lg-flex w-25 justify-content-end align-items-center gap-2">
            <a href="/login" class="btn btn-sm border-0 d-flex align-items-center gap-1">Masuk <i class="bi bi-box-arrow-in-right"></i></i></a>
            <a href="/register" class="btn btn-sm border-1 btn-outline-primary d-flex align-items-center gap-1 text-primary px-3 rounded-1">Daftar</i></a>
        </div>
    </div>
</nav>
