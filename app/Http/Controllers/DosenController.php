<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Support\Facades\DB;

class DosenController extends Controller{

    public function index()
    {
        return view('akademik.dosen', [
            'dosens' => Dosen::latest()->paginate(10)
        ]);
    }    

}