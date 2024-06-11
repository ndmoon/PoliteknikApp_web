<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriBackendController extends Controller
{
   /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.kategoris.index', [
            'kategoris' => Kategori::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.kategoris.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nama' => 'required'
        ]);
        Kategori::create($validateData);
        return redirect('/kategori-backend')->with('pesan', 'Store Success');
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
        return view('backend.kategoris.edit', [
            'kategori' => Kategori::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validateData = $request->validate([
            'nama' => 'required'
        ]);
        Kategori::where('id', $id)->update($validateData);
        return redirect('/kategori-backend')->with('pesan', 'Updated Success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Kategori::destroy($id);
        return redirect('/kategori-backend')->with('pesan', 'Deleted Success');
    }
}
