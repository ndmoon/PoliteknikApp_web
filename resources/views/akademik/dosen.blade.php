@extends('layouts.main')
@section('title', 'Data Dosen')
@section('navDosen', 'active')

@section('content')
    <h1> Daftar Dosen </h1>
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nik</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Prodi</th>
            <th>Alamat</th>
        </tr>

        @forelse ($dosens as $dosen)
            <tr>
                <td>{{ $dosens->firstItem()+$loop->index }}</td>
                <td>{{ $dosen->nik }}</td>
                <td>{{ $dosen->nama }}</td>
                <td>{{ $dosen->email }}</td>
                <td>{{ $dosen->prodi->nama }}</td>
                <td>{{ $dosen->alamat }}</td>
            </tr>
        @endforeach
    </table>

    {{ $dosens->links() }}
@endsection
