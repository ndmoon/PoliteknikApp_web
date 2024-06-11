<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use App\Models\Prodi;

class MahasiswaBackendController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.mahasiswas.index', ['mahasiswas' => Mahasiswa::latest()->paginate(10)]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.mahasiswas.create', ['prodis' => Prodi::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nim' => 'required|unique:mahasiswas',
            'nama_lengkap' => 'required|min:3',
            'tempat_lahir' => 'required',
            'tgl_lahir' => 'required',
            'email' => 'required',
            'prodi_id' => 'required',
            'alamat' => '',
        ]);

        Mahasiswa::create($validateData);
        return redirect('/mahasiswa-backend')->with('pesan', 'data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('backend.mahasiswas.edit', [
            'mahasiswas' => Mahasiswa::find($id),
            'prodis' => Prodi::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validateData = $request->validate([
            'nim' => 'required',
            'nama_lengkap' => 'required|min:3',
            'tempat_lahir' => 'required',
            'tgl_lahir' => 'required',
            'email' => 'required',
            'prodi_id' => 'required',
            'alamat' => '',
        ]);

        Mahasiswa::where('id', $id)->update($validateData);
        return redirect('/mahasiswa-backend')->with('pesan', 'data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Mahasiswa::destroy($id);
        return redirect('/mahasiswa-backend')->with('pesan', 'Data berhasil di hapus');
    }
}
