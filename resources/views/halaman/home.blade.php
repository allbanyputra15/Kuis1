@extends('layouts.app')

@section('title', 'Beranda')

@section('content')

<section class="hero">
        <img src="{{ asset('img/image.png') }}"
            alt="Kampus">

        <div class="hero-text">
            
            <p class="subtitle">
                SELAMAT DATANG DI
            </p>

            <h1>
                Politeknik Negeri Malang
                <span>PSDKU Pamekasan</span>
            </h1>

            <p>
                Membangun generasi unggul,
                inovatif, berkarakter,
                dan siap menghadapi masa depan.
            </p>

            <div class="hero-button">

                <a href="/tentang">
                    Tentang Kami
                </a>

                <a href="/akademik">
                    Program Studi
                </a>

            </div>

        </div>

</section>


<section class="section">

    <div class="container">

        <div class="section-title">

            <p>PROFIL KAMPUS</p>

            <h2>
                Pendidikan untuk Masa Depan
            </h2>

        </div>


        <div class="about">

            <div class="about-image">
                <img src="{{ asset('img/PSDKU.jpg') }}"
                     alt="PSDKU Pamekasan">
            </div>

            <div>

                <h2>
                    Politeknik Negeri Malang - PSDKU Pamekasan
                </h2>

                <p>
                    Politeknik Negeri Malang merupakan
                    perguruan tinggi yang berkomitmen
                    memberikan pendidikan berkualitas
                    bagi generasi muda.
                </p>

                <p>
                    Dengan dukungan tenaga pendidik
                    profesional dan fasilitas yang
                    memadai, kami terus berusaha
                    menciptakan lingkungan akademik
                    yang inovatif.
                </p>

                <a href="/tentang">
                    Selengkapnya →
                </a>

            </div>

        </div>

    </div>

</section>


<section class="section program-section">

    <div class="container">

        <div class="section-title">

            <p>AKADEMIK</p>

            <h2>
                Program Studi
            </h2>

        </div>


        <div class="cards">

            <div class="card">

                <div class="icon">
                    💻
                </div>

                <h3>
                    D-III Manajemen Informatika
                </h3>

                <p>
                    Program studi yang mempelajari
                    teknologi informasi dan software.
                </p>

            </div>

            <div class="card">

                <div class="icon">
                    ⚙️
                </div>

                <h3>
                    D-IV Teknik Otomotif Elektro
                </h3>

                <p>
                    Mempelajari teknologi mesin,
                    manufaktur dan mekanik.
                </p>

            </div>
            
            <div class="card">

                <div class="icon">
                    📊
                </div>

                <h3>
                    D-IV Manajemen Akuntansi
                </h3>

                <p>
                    Mempelajari bisnis,
                    organisasi dan manajemen.
                </p>

            </div> 
        </div>

    </div>

</section>

@endsection