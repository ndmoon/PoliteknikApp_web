@extends('backend.layouts.main')

@section('title', 'Data Berita')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-3 pt-2 mb-3 border-bottom">
    <h1>Berita</h1>
</div>

@if (session()->has('pesan'))
    <div class="alert alert-success mt-3" role="alert">
        {{ session('pesan') }}
    </div>
@endif

<a href="/berita-backend/create" class="btn btn-primary"><span data-feather="plus-circle"></span>
Create berita</a>

<table class="table table-bordered my-3" >
    <tr>
        <th class="text-center" width="50">No</th>
        <th>Title</th>
        <th>Excerpt</th>
        <th>User</th>
        <th>Kategori</th>
        <th>Aksi</th>
    </tr>
        @foreach ($beritas as $berita)
        <tr>
            <td>{{ $loop->iteration }} </td>
            <td>{{ $berita->title }} </td>
            <td>{{ $berita->excerpt }} </td>
            <td>{{ $berita->user->name}} </td>
            <td>{{ $berita->kategori->nama}} </td>
            <td>
                <a href="/berita-backend/{{$berita->id}}/edit" class="btn btn-warning btn-sm">
                    <span data-feather="edit"></span>Edit
                </a>

                <form action="/berita-backend/{{ $berita->id}}" method="post" class="d-inline">
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
{{$beritas->links()}}
@endsection
