<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KampusPolinema extends Controller
{
    //method kampus polinema
    public function home()
    {
        return view('home');
    }

    public function tentang()
    {
        return view('tentang');
    }

    public function akademik()
    {
        return view('akademik');
    }

    public function berita()
    {
        return view('berita');
    }

    public function kontak()
    {
        return view('kontak');
    }
}
