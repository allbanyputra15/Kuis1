<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Fonts -->
    {{-- <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" /> --}}

    @vite('resources/js/app.js')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body class="bg-light text-dark">
    <div class="min-vh-100 d-flex flex-column">
        @include('layouts.navigation')

        @isset($header)
            <header class="bg-white border-bottom py-4">
                <div class="container">
                    {{ $header }}
                </div>
            </header>
        @endisset

        <main class="flex-grow-1">
            @yield('content')
        </main>
    </div>

    <footer class="bg-dark text-white pt-5 pb-3">
        <div class="container">
            <div class="row g-4 pb-4">
                <div class="col-md-5">
                    <h2 class="h5 fw-bold">POLINEMA PAMEKASAN</h2>
                    <p class="text-white-50 mb-0">Membangun generasi unggul, berkarakter dan berdaya saing.</p>
                </div>
                <div class="col-6 col-md-3">
                    <h2 class="h6 fw-bold">Menu</h2>
                    <ul class="list-unstyled mb-0">
                        <li><a class="link-light link-opacity-75 text-decoration-none"
                                href="{{ route('home') }}">Beranda</a></li>
                        <li><a class="link-light link-opacity-75 text-decoration-none"
                                href="{{ route('tentang') }}">Tentang</a></li>
                        <li><a class="link-light link-opacity-75 text-decoration-none"
                                href="{{ route('akademik') }}">Akademik</a></li>
                        <li><a class="link-light link-opacity-75 text-decoration-none"
                                href="{{ route('berita') }}">Berita</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md-4">
                    <h2 class="h6 fw-bold">Kontak</h2>
                    <p class="text-white-50 mb-1">Jl. Stadion No.IX/03, Ombul, Lawangan Daya, Pademawu, Pamekasan.</p>
                    <a class="link-light link-opacity-75 text-decoration-none"
                        href="mailto:info@universitas.ac.id">info@universitas.ac.id</a>
                </div>
            </div>
            <div class="border-top border-secondary pt-3 text-center text-white-50 small">
                &copy; {{ date('Y') }} Politeknik Negeri Malang - PSDKU Pamekasan
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</body>

</html>
