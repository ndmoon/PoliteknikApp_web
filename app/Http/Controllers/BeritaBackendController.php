<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class BeritaBackendController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.beritas.index', [
            'beritas' => Berita::latest()->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.beritas.create', [
            'user' => Auth::user(),
            'kategoris' => Kategori::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:150|min:10',
            'kategori_id' => 'required|numeric',
            'file_upload' => 'nullable|image|mimes:png,jpg',
            'body' => 'required'
        ]);

        if ($request->hasFile('file_upload')) {
            $namaFile = 'img_' . time() . '_' . $request->file_upload->getClientOriginalName();
            $request->file_upload->move('images', $namaFile);
        }
        else {
            $namaFile = '';
        }

        $validatedData['file_upload'] = $namaFile;

        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body, 50));

        Berita::create($validatedData);
        return redirect('/berita-backend')->with('pesan', 'Data berhasil disimpan');
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
        return view('backend.beritas.edit', [
            'kategoris' => Kategori::all(),
            'berita' => Berita::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:150|min:10',
            'kategori_id' => 'required|numeric',
            'file_upload' => 'nullable|image|mimes:png,jpg',
            'body' => 'required'
        ]);

        if ($request->hasfile('file_upload')) {
            if ($request->image_old) {
                $image_url = public_path() . '/images/' . $request->image_old;
                unlink($image_url);
            }
            $namaFile = 'img_' . time() . '_' . $request->file_upload->getClientOriginalName();
            $request->file_upload->move('images', $namaFile);
        }
        else {
            $namaFile = $request->image_old;
        }

        $validatedData['file_upload'] = $namaFile;
        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 100);

        Berita::where('id', $id)->update($validatedData);
        return redirect('/berita-backend')->with('pesan', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cari = Berita::find($id);
        if ($cari->file_upload != '') {
            $image_url = public_path() . '/images/' . $cari->file_upload;
            unlink($image_url);
        }
        Berita::destroy($id);
        return redirect('/berita-backend')->with('pesan', 'Data berhasil dihapus');
    }
}
