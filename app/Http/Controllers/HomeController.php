<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laratrust\LaratrustFacade as Laratrust;
use App\kategori;
use App\Kelas;
use App\DataSiswa;
use App\Pertanyaan;
use App\Jawab;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jur = kategori::get();
        $kel = Kelas::get();
        $sis = DataSiswa::get();
        $datper = Pertanyaan::get();
        $jawab = Jawab::get();
        return View('home', compact('jur', 'kel', 'sis','datper','jawab'));
    }
}
