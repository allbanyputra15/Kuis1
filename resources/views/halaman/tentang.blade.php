@extends('layouts.app')

@section('title', 'Tentang Kami')

@section('content')

<section class="page-header">

    <div class="container">

        <p>TENTANG KAMI</p>

        <h1>
            Profil Universitas
        </h1>

    </div>

</section>


<section class="section">

    <div class="container">

        <div class="about-page">

            <div class="about-image">
                <img src="{{ asset('img/foto.jpg') }}"
                    alt="Kampus">
            </div>

            <div>

                <h2>
                    Politeknik Negeri Malang - PSDKU Pamekasan
                </h2>

                <p>
                    Politeknik Negeri Malang adalah
                    perguruan tinggi yang berkomitmen
                    memberikan pendidikan berkualitas
                    dan relevan dengan perkembangan
                    zaman.
                </p>

                <p>
                    Kami berupaya menciptakan lulusan
                    yang memiliki kompetensi,
                    kreativitas, integritas, dan
                    kepedulian terhadap masyarakat.
                </p>

            </div>

        </div>


        <div class="visi-misi">

            <div>

                <h2>
                    Visi
                </h2>

                <p>
                    Menjadi perguruan tinggi unggul
                    yang menghasilkan sumber daya
                    manusia berkualitas dan inovatif.
                </p>

            </div>


            <div>

                <h2>
                    Misi
                </h2>

                <p>
                    Menyelenggarakan pendidikan,
                    penelitian, dan pengabdian kepada
                    masyarakat secara berkualitas.
                </p>

            </div>

        </div>

    </div>

</section>

@endsection