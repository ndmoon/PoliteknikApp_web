@extends('backend.layouts.main')

@section('container')
<div class="col-lg-6 mb-5">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Mahasiswa</h1>
</div>
<form method="post" action="/mahasiswa-backend/{{ $mahasiswas->id}}">
    @method('put')
    @csrf
    <div class="mb-2">
      
      <label for="nim" class="form-label">NIM</label>
      <input type="text" class="form-control @error('nim') is-invalid @enderror" name="nim" value="{{ old('nim', $mahasiswas->nim)}}">
      @error('nim')
      <div class="invalid-feedback">
          {{ $message }}
      </div>
      @enderror
    </div>
    <div class="mb-2">
      <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
      <input type="text" class="form-control @error('nama_lengkap') is-invalid @enderror" name="nama_lengkap" value="{{ old('nama_lengkap', $mahasiswas->nama_lengkap)}}">
      @error('nama_lengkap')
      <div class="invalid-feedback">
          {{ $message }}
      </div>
      @enderror
    </div>

    <div class="mb-2">
      <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
      <input type="text" class="form-control @error('tempat_lahir') is-invalid @enderror" name="tempat_lahir" value="{{ old('tempat_lahir', $mahasiswas->tempat_lahir)}}">
      @error('tempat_lahir')
      <div class="invalid-feedback">
          {{ $message }}
      </div>
      @enderror
    </div>
    <div class="mb-2">
      <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
      <input type="date" class="form-control @error('tgl_lahir') is-invalid @enderror" name="tgl_lahir" value="{{ old('tgl_lahir', $mahasiswas->tgl_lahir)}}">
      @error('tgl_lahir')
      <div class="invalid-feedback">
          {{ $message }}
      </div>
      @enderror
    </div>

    <div class="mb-2">
      <label for="email" class="form-label">Email</label>
      <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email', $mahasiswas->email)}}">
      @error('email')
      <div class="invalid-feedback">
          {{ $message }}
      </div>
      @enderror
    </div>
    <div class="mb-2">
      <label for="prodi_id" class="form-label">Prodi</label>
      <select class="form-select @error('prodi_id') is-invalid @enderror" name="prodi_id">
        @foreach ( $prodis as $prodi )
        @if (old('prodi_id',$mahasiswas->prodi_id)== $prodi->id)
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
        <textarea class="form-control @error('alamat') is-invalid @enderror" name="alamat">{{ old('alamat', $mahasiswas->alamat)}}</textarea>
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