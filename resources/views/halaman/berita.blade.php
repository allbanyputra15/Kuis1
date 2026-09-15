@extends('layouts.app')

@section('title', 'Berita Kampus')

@section('content')

<section class="page-header">

    <div class="container">

        <p>INFORMASI</p>

        <h1>
            Berita Kampus
        </h1>

    </div>

</section>


<section class="section">

    <div class="container">

        <div class="news">

            <article>

                <div class="news-image">
                    📰
                </div>

                <div class="news-content">

                    <small>
                        15 September 2026
                    </small>

                    <h2>
                        Universitas Nusantara
                        Raih Prestasi Nasional
                    </h2>

                    <p>
                        Mahasiswa Universitas Nusantara
                        berhasil meraih prestasi dalam
                        kompetisi tingkat nasional.
                    </p>

                </div>

            </article>


            <article>

                <div class="news-image">
                    🎓
                </div>

                <div class="news-content">

                    <small>
                        10 September 2026
                    </small>

                    <h2>
                        Pembukaan Tahun Akademik
                    </h2>

                    <p>
                        Universitas Nusantara membuka
                        tahun akademik baru dengan
                        berbagai kegiatan.
                    </p>

                </div>

            </article>

        </div>

    </div>

</section>

@endsection