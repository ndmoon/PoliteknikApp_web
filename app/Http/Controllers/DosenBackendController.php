<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Prodi;
use Illuminate\Http\Request;

class DosenBackendController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.dosens.index', ['dosens' => Dosen::latest()->paginate(10)]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.dosens.create', [
            'prodis'=>Prodi::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nik' => 'required|unique:dosens',
            'nama' => 'required|min:3',
            'email' => 'required',
            'prodi_id' => 'required',
            'alamat' => ''
        ]);

        Dosen::create($validateData);
        return redirect('/dosen-backend')->with('pesan', 'data berhasil disimpan');
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
        return view('backend.dosens.edit' ,[
            'dosen'=>Dosen::find($id),
            'prodis'=>Prodi::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validateData = $request->validate([
            'nik' => 'required',
            'nama' => 'required|min:3',
            'email' => 'required',
            'prodi_id' => 'required',
            'alamat' => ''
        ]);

        Dosen::where('id', $id)->update($validateData);
        return redirect('/dosen-backend')->with('pesan', 'data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Dosen::destroy($id);
        return redirect('/dosen-backend')->with('pesan','Data berhasil di hapus');
    }
}
