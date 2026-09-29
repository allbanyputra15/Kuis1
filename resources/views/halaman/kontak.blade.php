@extends('layouts.app')

@section('title', 'Kontak')

@section('content')

    <section class="bg-primary-subtle py-5">
        <div class="container py-3">
            <p class="text-primary fw-bold text-uppercase mb-2">Kontak</p>
            <h1 class="display-5 fw-bold mb-0">Hubungi Kami</h1>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="row g-4 g-lg-5">
                <div class="col-lg-7">
                    <h2 class="h3 fw-bold mb-4">Politeknik Negeri Malang PSDKU Pamekasan</h2>
                    <address class="text-secondary">
                        <p>📍 Jl. Stadion No.IX/03, Ombul, Lawangan Daya, Kec. Pademawu, Kabupaten Pamekasan, Jawa Timur
                            69323.</p>
                        <p>📞 (0341) 123456</p>
                        <p class="mb-0">✉️ <a href="mailto:info@universitas.ac.id">info@universitas.ac.id</a></p>
                    </address>
                </div>
                <div class="col-lg-5">
                    <div class="bg-body-tertiary rounded-3 p-4 p-lg-5 h-100">
                        <h2 class="h4 fw-bold">Jam Operasional</h2>
                        <p class="text-secondary mb-1">Senin - Jumat</p>
                        <p class="fs-5 fw-semibold mb-0">07.00 - 21.00 WIB</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
