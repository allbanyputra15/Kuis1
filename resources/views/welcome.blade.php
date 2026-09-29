<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Politeknik Negeri Malang - PSDKU Pamekasan') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body class="bg-body-tertiary">
    <nav class="navbar bg-white border-bottom">
        <div class="container">
            <a class="navbar-brand fw-bold text-primary" href="{{ url('/') }}">POLINEMA <span class="text-dark">PAMEKASAN</span></a>
            <div class="d-flex gap-2">
                @auth
                    <a class="btn btn-primary" href="{{ route('dashboard') }}">Dashboard</a>
                @else
                    <a class="btn btn-outline-primary" href="{{ route('login') }}">Masuk</a>
                    @if (Route::has('register'))
                        <a class="btn btn-primary" href="{{ route('register') }}">Daftar</a>
                    @endif
                @endauth
            </div>
        </div>
    </nav>
    <main>
        <section class="position-relative overflow-hidden bg-dark text-white">
            <img class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover opacity-50" src="{{ asset('img/image.png') }}" alt="Kampus Politeknik Negeri Malang PSDKU Pamekasan">
            <div class="container position-relative py-5" style="min-height: 420px">
                <div class="row align-items-end">
                    <div class="col-lg-8 py-5">
                        <p class="text-info fw-bold text-uppercase mb-3">Politeknik Negeri Malang</p>
                        <h1 class="display-5 fw-bold">PSDKU Pamekasan</h1>
                        <p class="lead col-lg-10">Membangun generasi unggul, inovatif, berkarakter, dan siap menghadapi masa depan.</p>
                        <a class="btn btn-primary btn-lg mt-3" href="{{ route('login') }}">Masuk ke Portal</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-5">
            <div class="container py-lg-4">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-7">
                        <p class="text-primary fw-bold text-uppercase mb-2">Selamat Datang</p>
                        <h2 class="h3 fw-bold">Pendidikan untuk Masa Depan</h2>
                        <p class="text-secondary mb-0">Portal Politeknik Negeri Malang PSDKU Pamekasan menyediakan akses ke informasi akademik, berita kampus, dan layanan mahasiswa.</p>
                    </div>
                    <div class="col-lg-5">
                        <div class="bg-white border rounded-3 p-4">
                            <h2 class="h5 fw-bold">Jelajahi Kampus</h2>
                            <p class="text-secondary">Masuk untuk melihat halaman kampus dan layanan akademik.</p>
                            <a class="btn btn-outline-primary" href="{{ route('login') }}">Masuk</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>
