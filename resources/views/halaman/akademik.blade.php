@extends('layouts.app')

@section('title', 'Akademik')

@section('content')

    <section class="bg-primary-subtle py-5">
        <div class="container py-3">
            <p class="text-primary fw-bold text-uppercase mb-2">Akademik</p>
            <h1 class="display-5 fw-bold mb-0">Program Studi</h1>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-6 col-xl-4">
                    <article class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4">
                            <div class="display-5 mb-3" aria-hidden="true">💻</div>
                            <h2 class="h5 fw-bold">D-III Manajemen Informatika</h2>
                            <p class="text-secondary mb-0">Program studi yang mempelajari teknologi informasi dan software.
                            </p>
                        </div>
                    </article>
                </div>
                <div class="col-md-6 col-xl-4">
                    <article class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4">
                            <div class="display-5 mb-3" aria-hidden="true">⚙️</div>
                            <h2 class="h5 fw-bold">D-IV Teknik Otomotif Elektro</h2>
                            <p class="text-secondary mb-0">Mempelajari teknologi mesin, manufaktur dan mekanik.</p>
                        </div>
                    </article>
                </div>
                <div class="col-md-6 col-xl-4">
                    <article class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4">
                            <div class="display-5 mb-3" aria-hidden="true">📊</div>
                            <h2 class="h5 fw-bold">D-IV Manajemen Akuntansi</h2>
                            <p class="text-secondary mb-0">Mempelajari bisnis, organisasi dan manajemen.</p>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>

@endsection
