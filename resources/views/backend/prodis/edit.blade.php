@extends('backend.layouts.main')

@section('container')
<div class="col-lg-6 mb-5">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Entri Prodi</h1>
</div>
<form method="post" action="/prodi-backend/{{$prodi->id}}">
  @method('PUT')
    @csrf
      <div class="mb-2">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama', $prodi->nama)}}">
        @error('nama')
          <div class="invalid-feedback">
          {{ $message }}
      </div>
      @enderror
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
@endsection