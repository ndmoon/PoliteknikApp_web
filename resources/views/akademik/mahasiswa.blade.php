@extends('layouts.main')
@section('navMhs', 'active')
@section('title', 'Data Mahasiswa')

@section('content')
<h1> Daftar Mahasiswa Jurusan TI</h1>
<table class="table table-bordered">
    <tr>
        <th class="text-center" width="50">No</th>
        <th>NIM</th>
        <th>Nama Lengkap</th>
        <th>Email</th>
        <th>Alamat</th>
    </tr>
        @foreach ($mahasiswas as $mahasiswa)
        <tr>
            <td>{{ $mahasiswas->firstItem()+$loop->index }} </td>
            <td>{{ $mahasiswa->nim }} </td>
            <td>{{ $mahasiswa->nama_lengkap }} </td>
            <td>{{ $mahasiswa->email }} </td>
            <td>{{ $mahasiswa->alamat }} </td>
        </tr>
        @endforeach
</table>
{{$mahasiswas->links()}}
@endsection
