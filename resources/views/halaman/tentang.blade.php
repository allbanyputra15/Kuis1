@extends('layouts.app')

@section('title', 'Tentang Kami')

@section('content')

    <section class="bg-primary-subtle py-5">
        <div class="container py-3">
            <p class="text-primary fw-bold text-uppercase mb-2">Tentang Kami</p>
            <h1 class="display-5 fw-bold mb-0">Profil Universitas</h1>
        </div>
    </section>

    <section class="py-5">
        <div class="container py-lg-3">
            <div class="row align-items-center g-4 g-lg-5">
                <div class="col-lg-6">
                    <img class="img-fluid rounded-3 w-100 object-fit-cover" style="height: 380px"
                        src="{{ asset('img/foto.jpg') }}" alt="Kampus Politeknik Negeri Malang PSDKU Pamekasan">
                </div>
                <div class="col-lg-6">
                    <h2 class="h3 fw-bold">Politeknik Negeri Malang - PSDKU Pamekasan</h2>
                    <p class="text-secondary">Politeknik Negeri Malang adalah perguruan tinggi yang berkomitmen memberikan
                        pendidikan berkualitas dan relevan dengan perkembangan zaman.</p>
                    <p class="text-secondary mb-0">Kami berupaya menciptakan lulusan yang memiliki kompetensi, kreativitas,
                        integritas, dan kepedulian terhadap masyarakat.</p>
                </div>
            </div>
            <div class="row g-4 mt-3">
                <div class="col-md-6">
                    <section class="h-100 bg-body-tertiary rounded-3 p-4 p-lg-5">
                        <h2 class="h4 fw-bold">Visi</h2>
                        <p class="text-secondary mb-0">Menjadi perguruan tinggi unggul yang menghasilkan sumber daya manusia
                            berkualitas dan inovatif.</p>
                    </section>
                </div>
                <div class="col-md-6">
                    <section class="h-100 bg-body-tertiary rounded-3 p-4 p-lg-5">
                        <h2 class="h4 fw-bold">Misi</h2>
                        <p class="text-secondary mb-0">Menyelenggarakan pendidikan, penelitian, dan pengabdian kepada
                            masyarakat secara berkualitas.</p>
                    </section>
                </div>
            </div>
        </div>
    </section>

@endsection
