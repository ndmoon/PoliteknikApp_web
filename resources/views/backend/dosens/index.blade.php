@extends('backend.layouts.main')

@section('title', 'Data Dosen')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-3 pt-2 mb-3 border-bottom">
    <h1>Dosen</h1>
</div>

@if (session()->has('pesan'))
    <div class="alert alert-success mt-3" role="alert">
        {{ session('pesan') }}
    </div>
@endif

<a href="/dosen-backend/create" class="btn btn-primary"><span data-feather="plus-circle"></span>
Create Dosen</a>

<table class="table table-bordered my-3" >
    <tr>
        <th class="text-center" width="50">No</th>
        <th>NIK</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Prodi</th>
        <th>Alamat</th>
        <th>Aksi</th>
    </tr>
        @foreach ($dosens as $dosen)
        <tr>
            <td>{{ $dosens->firstItem()+$loop->index }} </td>
            <td>{{ $dosen->nik }} </td>
            <td>{{ $dosen->nama }} </td>
            <td>{{ $dosen->email }} </td>
            <td>{{ $dosen->prodi->nama}} </td>
            <td>{{ $dosen->alamat}} </td>
            <td>
                <a href="/dosen-backend/{{$dosen->id}}/edit" class="btn btn-warning btn-sm">
                    <span data-feather="edit"></span>Edit
                </a>

                <form action="/dosen-backend/{{ $dosen->id}}" method="post" class="d-inline">
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
{{$dosens->links()}}
@endsection
