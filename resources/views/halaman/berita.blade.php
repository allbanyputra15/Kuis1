@extends('layouts.app')

@section('title', 'Berita Kampus')

@section('content')

    <section class="bg-primary-subtle py-5">
        <div class="container py-3">
            <p class="text-primary fw-bold text-uppercase mb-2">Informasi</p>
            <h1 class="display-5 fw-bold mb-0">Berita Kampus</h1>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-6">
                    <article class="card h-100 border-0 shadow-sm">
                        <div class="bg-body-tertiary d-flex align-items-center justify-content-center display-1"
                            style="height: 180px" aria-hidden="true">📰</div>
                        <div class="card-body p-4">
                            <p class="small text-secondary mb-2">15 September 2026</p>
                            <h2 class="h4 fw-bold">Politeknik Negeri Malang PSDKU Pamekasan Raih Prestasi Nasional</h2>
                            <p class="card-text text-secondary mb-0">Mahasiswa Politeknik Negeri Malang PSDKU Pamekasan
                                berhasil meraih prestasi dalam kompetisi tingkat nasional.</p>
                        </div>
                    </article>
                </div>
                <div class="col-lg-6">
                    <article class="card h-100 border-0 shadow-sm">
                        <div class="bg-body-tertiary d-flex align-items-center justify-content-center display-1"
                            style="height: 180px" aria-hidden="true">🎓</div>
                        <div class="card-body p-4">
                            <p class="small text-secondary mb-2">18 Februari 2025</p>
                            <h2 class="h4 fw-bold">Pembukaan Penerimaan Mahasiswa Baru</h2>
                            <p class="card-text text-secondary mb-0">Politeknik Negeri Malang PSDKU Pamekasan membuka tahun
                                akademik baru dengan berbagai kegiatan.</p>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>

@endsection
