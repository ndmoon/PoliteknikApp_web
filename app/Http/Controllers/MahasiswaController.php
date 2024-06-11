<?php

namespace App\Http\Controllers;

use App\Models\f;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        return view('akademik.mahasiswa', ['mahasiswas'=>Mahasiswa::latest()->paginate(10)]);
    }
}
