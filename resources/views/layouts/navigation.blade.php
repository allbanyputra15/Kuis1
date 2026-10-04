<nav class="navbar navbar-expand-lg bg-white border-bottom sticky-top">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center gap-2 fw-bold text-primary" href="{{ route('home') }}">
            <img src="{{ asset('img/logo.webp') }}" alt="Logo PSDKU Pamekasan" width="44" height="44"
                class="rounded-circle object-fit-cover">
            <span>POLINEMA <span class="text-dark">PAMEKASAN</span></span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavigation"
            aria-controls="mainNavigation" aria-expanded="false" aria-label="Buka navigasi">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mainNavigation">
            <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-2">
                <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Beranda</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('tentang') }}">Tentang</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('akademik') }}">Akademik</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('berita') }}">Berita</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('kontak') }}">Kontak</a></li>
                @auth
                    <li class="nav-item dropdown">
                        <button class="btn btn-outline-primary dropdown-toggle" data-bs-toggle="dropdown"
                            aria-expanded="false">{{ Auth::user()->name }}</button>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="{{ route('profile.edit') }}">Profil</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button class="dropdown-item" type="submit">Keluar</button>
                                </form>
                            </li>
                        </ul>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
