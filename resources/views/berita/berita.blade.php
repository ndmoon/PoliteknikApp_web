@extends('layouts.main')
@section('title', 'Berita')
@section('navBerita', 'active')

@section('content')
<h1>Berita</h1>
<div class="row">
    @foreach ( $beritas as $berita )
    <div class="col-lg-3 my-3">
        <div class="card h-100">
            <img src="https://source.unsplash.com/800x300?web,networking" class="card-img-top" alt="Logo TI">
            <div class="card-body d-flex flex-column justify-content-between" >
                <h5>{{$berita->title}}</h5>
                <p class="cart-text">{{$berita->excerpt}}</p>
                <a href="/berita/{{ $berita->id }}" class="btn btn-primary" style="width:120px">Read more</a>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
