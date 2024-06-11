@extends('backend.layouts.main')

@section('container')
<div class="col-lg-6 mb-5">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Entri Dosen</h1>
</div>
<form method="post" action="/dosen-backend/{{$dosen->id}}">
    @method('PUT')
    @csrf
    <div class="mb-2">
      
      <label for="nik" class="form-label">NIK</label>
      <input type="text" class="form-control @error('nik') is-invalid @enderror" name="nik" value="{{ old('nik', $dosen->nik)}}">
      @error('nik')
      <div class="invalid-feedback">
          {{ $message }}
      </div>
      @enderror
    </div>
    <div class="mb-2">
      <label for="nama" class="form-label">Nama Lengkap</label>
      <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama', $dosen->nama)}}">
      @error('nama')
      <div class="invalid-feedback">
          {{ $message }}
      </div>
      @enderror
    </div>

    <div class="mb-2">
      <label for="email" class="form-label">Email</label>
      <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email', $dosen->email)}}">
      @error('email')
      <div class="invalid-feedback">
          {{ $message }}
      </div>
      @enderror

    <div class="mb-2">
      <label for="prodi_id" class="form-label">Prodi</label>
      <select class="form-select @error('prodi_id') is-invalid @enderror" name="prodi_id">
        @foreach ( $prodis as $prodi )
        @if (old('prodi_id' , $dosen->prodi_id)== $prodi->id)
          <option value="{{$prodi->id}}" selected> {{$prodi->nama}}</option>
        @else
          <option value="{{$prodi->id}}"> {{$prodi->nama}}</option>
        @endif
        @endforeach
      </select>
      @error('prodi_id')
      <div class="invalid-feedback">
          {{ $message }}
      </div>
      @enderror
    </div>
      <div class="mb-2">
        <label for="alamat" class="form-label">Alamat</label>
        <textarea class="form-control @error('alamat') is-invalid @enderror" name="alamat">{{ old('alamat', $dosen->alamat)}}</textarea>
        @error('alamat')
          <div class="invalid-feedback">
          {{ $message }}
      </div>
      @enderror
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
@endsection