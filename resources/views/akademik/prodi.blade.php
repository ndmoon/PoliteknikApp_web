@extends('layouts.main')
@section('title', 'Data Prodi')
@section('navProdi', 'active')

@section('content')
<h1>Daftar Prodi</h1>
<div class="row">
    <div class="col-lg-4">
        <div class="card h-100" style="width:18rem;">
            <img src="/img/logo-ti.jpg" class="card-img-top" alt="Logo TI">
            <div class="card-body d-flex flex-column justify-content-between" >
                <h5> Prodi Manajemen Informatika</h5>
                <p class="cart-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                    Reprehenderit nihil harum quia quam quae deleniti accusamus 
                    possimus</p>
                <a href="#" class="btn btn-primary" style="width:80px">more</a>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card h-100" style="width:18rem;">
            <img src="/img/logo-ti.jpg" class="card-img-top" alt="Logo TI">
            <div class="card-body d-flex flex-column justify-content-between" >
                <h5> Prodi Teknik Komputer</h5>
                <p class="cart-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                    Reprehenderit nihil harum quia quam quae deleniti accusamus 
                    possimus  </p>
                <a href="#" class="btn btn-primary" style="width:80px">more</a>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card h-100" style="width:18rem;">
            <img src="/img/logo-ti.jpg" class="card-img-top" alt="Logo TI">
            <div class="card-body d-flex flex-column justify-content-between" >
                <h5> Prodi Teknologi Rekayasa Perangkat Lunak</h5>
                <p class="cart-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                    Reprehenderit nihil harum quia quam quae deleniti accusamus 
                    possimus</p>
                <a href="#" class="btn btn-primary" style="width:80px">more</a>
            </div>
        </div>
    </div>
</div>
@endsection
