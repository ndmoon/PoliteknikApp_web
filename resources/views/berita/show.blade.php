@extends('layouts.main')
@section('title', 'Berita')
@section('navBerita', 'active')

@section('content')
    {{-- <img src="https://source.unsplash.com/800x300?web,networking" alt="news image"> --}}
    <?php
    $image = $berita->file_upload ? asset('images/' . $berita->file_upload) : 'https://source.unsplash.com/800x300?web,networking';
    ?>
    <div style="width: 100%; height: 50vh; background: url('{{ $image }}'); background-size: cover">

    </div>
    <h1>{{ $berita->title }}</h1>
    <p class="d-flex justify-content-between pt-3">
        <sub>{{ $berita->user->name }} | {{ $berita->kategori->name }}</sub>
        <sub>{{ $berita->created_at }}</sub>
    </p>
    <hr>
    <p>
        {{ $berita->body }}
    </p>

@endsection
