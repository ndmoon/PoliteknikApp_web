@extends('backend.layouts.main')
@section('title', 'Data Mahasiswa')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-3 pt-2 mb-3 border-bottom">
    <h1>Mahasiswa</h1>
</div>

@if (session()->has('pesan'))
    <div class="alert alert-success mt-3" role="alert">
        {{ session('pesan') }}
    </div>
@endif

<a href="/mahasiswa-backend/create" class="btn btn-primary"><span data-feather="plus-circle"></span>
Create Mahasiswa</a>

<table class="table table-bordered my-3" >
    <tr>
        <th class="text-center" width="50">No</th>
        <th>NIM</th>
        <th>Nama Lengkap</th>
        <th>Email</th>
        <th>Prodi</th>
        <th>Aksi</th>
    </tr>
        @foreach ($mahasiswas as $mahasiswa)
        <tr>
            <td>{{ $mahasiswas->firstItem()+$loop->index }} </td>
            <td>{{ $mahasiswa->nim }} </td>
            <td>{{ $mahasiswa->nama_lengkap }} </td>
            <td>{{ $mahasiswa->email }} </td>
            <td>{{ $mahasiswa->prodi->nama}} </td>
            <td>
                <a href="/mahasiswa-backend/{{$mahasiswa->id}}/edit" class="btn btn-warning btn-sm">
                    <span data-feather="edit"></span>Edit
                </a>

                <form action="/mahasiswa-backend/{{ $mahasiswa->id}}" method="post" class="d-inline">
                    @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin akan menghapus data ?')">
                            <span data-feather="trash-2"></span>Delete
                        </button>
                </form>
            </td>
        </tr>
        @endforeach
</table>
{{$mahasiswas->links()}}
@endsection
