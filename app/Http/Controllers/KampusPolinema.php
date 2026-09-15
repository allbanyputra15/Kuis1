<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KampusPolinema extends Controller
{
    //method kampus polinema
    public function home()
    {
        return view('halaman.home');
    }

    public function tentang()
    {
        return view('halaman.tentang');
    }

    public function akademik()
    {
        return view('halaman.akademik');
    }

    public function berita()
    {
        return view('halaman.berita');
    }

    public function kontak()
    {
        return view('halaman.kontak');
    }
}
