<?php

namespace App\Http\Controllers;

use App\Models\Prodi;
use Illuminate\Http\Request;

class ProdiBackendController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.prodis.index', [
            'prodis' => Prodi::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.prodis.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nama' => 'required'
        ]);
        Prodi::create($validateData);
        return redirect('/prodi-backend')->with('pesan', 'Store Success');
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
        return view('backend.prodis.edit', [
            'prodi' => Prodi::find($id)
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
        Prodi::where('id', $id)->update($validateData);
        return redirect('/prodi-backend')->with('pesan', 'Updated Success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Prodi::destroy($id);
        return redirect('/prodi-backend')->with('pesan', 'Deleted Success');
    }
}
