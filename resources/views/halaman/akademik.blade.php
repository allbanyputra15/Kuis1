@extends('layouts.app')

@section('title', 'Akademik')

@section('content')

<section class="page-header">

    <div class="container">

        <p>AKADEMIK</p>

        <h1>
            Program Studi
        </h1>

    </div>

</section>


<section class="section">

    <div class="container">

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