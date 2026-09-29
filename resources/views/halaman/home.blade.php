@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
    <section class="position-relative overflow-hidden bg-dark text-white">
        <img class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover opacity-50"
            src="{{ asset('img/image.png') }}" alt="Kampus Politeknik Negeri Malang PSDKU Pamekasan">
        <div class="container position-relative py-5" style="min-height: 420px">
            <div class="row align-items-end">
                <div class="col-lg-8 col-xl-7 py-5">
                    <p class="text-info fw-bold text-uppercase mb-3">Selamat datang di</p>
                    <h1 class="display-5 fw-bold">Politeknik Negeri Malang <span class="d-block text-info">PSDKU
                            Pamekasan</span></h1>
                    <p class="lead col-lg-10">Membangun generasi unggul, inovatif, berkarakter, dan siap menghadapi masa
                        depan.</p>
                    <div class="d-flex flex-wrap gap-3 mt-4">
                        <a class="btn btn-primary btn-lg" href="{{ route('tentang') }}">Tentang Kami</a>
                        <a class="btn btn-outline-light btn-lg" href="{{ route('akademik') }}">Program Studi</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container py-lg-4">
            <div class="text-center mb-5">
                <p class="text-primary fw-bold text-uppercase mb-2">Profil Kampus</p>
                <h2 class="display-6 fw-bold">Pendidikan untuk Masa Depan</h2>
            </div>
            <div class="row align-items-center g-4 g-lg-5">
                <div class="col-lg-6">
                    <img class="img-fluid rounded-3 w-100 object-fit-cover" style="height: 360px"
                        src="{{ asset('img/PSDKU.jpg') }}" alt="PSDKU Pamekasan">
                </div>
                <div class="col-lg-6">
                    <h2 class="h3 fw-bold mb-3">Politeknik Negeri Malang - PSDKU Pamekasan</h2>
                    <p class="text-secondary">Politeknik Negeri Malang merupakan perguruan tinggi yang berkomitmen
                        memberikan pendidikan berkualitas bagi generasi muda.</p>
                    <p class="text-secondary">Dengan dukungan tenaga pendidik profesional dan fasilitas yang memadai, kami
                        terus berusaha menciptakan lingkungan akademik yang inovatif.</p>
                    <a class="btn btn-link link-primary px-0 fw-semibold" href="{{ route('tentang') }}">Selengkapnya <span
                            aria-hidden="true">&rarr;</span></a>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-body-tertiary py-5">
        <div class="container py-lg-4">
            <div class="text-center mb-5">
                <p class="text-primary fw-bold text-uppercase mb-2">Akademik</p>
                <h2 class="display-6 fw-bold">Program Studi</h2>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-xl-4">
                    <article class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center p-4">
                            <div class="display-4 mb-3" aria-hidden="true">💻</div>
                            <h3 class="h5 card-title fw-bold">D-III Manajemen Informatika</h3>
                            <p class="card-text text-secondary mb-0">Program studi yang mempelajari teknologi informasi dan
                                software.</p>
                        </div>
                    </article>
                </div>
                <div class="col-md-6 col-xl-4">
                    <article class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center p-4">
                            <div class="display-4 mb-3" aria-hidden="true">📊</div>
                            <h3 class="h5 card-title fw-bold">D-IV Sistem Informasi Bisnis</h3>
                            <p class="card-text text-secondary mb-0">Program studi yang mempelajari sistem informasi untuk
                                bisnis.</p>
                        </div>
                    </article>
                </div>
                <div class="col-md-6 col-xl-4">
                    <article class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center p-4">
                            <div class="display-4 mb-3" aria-hidden="true">🖥️</div>
                            <h3 class="h5 card-title fw-bold">D-IV Teknik Informatika</h3>
                            <p class="card-text text-secondary mb-0">Program studi yang mempelajari rekayasa perangkat
                                lunak.</p>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>

@endsection
