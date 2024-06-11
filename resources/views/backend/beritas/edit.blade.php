@extends('backend.layouts.main')

@section('container')
    <div class="col-lg-6 mb-5">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Edit Berita</h1>
        </div>
        <form method="post" action="/berita-backend/{{ $berita->id }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="mb-2">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title"
                    value="{{ old('title', $berita->title) }}">
                @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-2">

                <input type="hidden" name="image_old" value="{{ $berita->file_upload }}">
                <label for="file_upload" class="form-label"> File Upload </label>
                @if ($berita->file_upload)
                    <img id="file-preview" src="/images/{{ $berita->file_upload }}" class="img-fluid col-sm-6 d-block mb-2"
                        height="100">
                @else
                    <img id="file-preview" class="img-fluid col-sm-6 d-block mb-2" height="100">
                @endif
                <input type="file" class="form-control @error('file_upload') is-invalid @enderror" name="file_upload"
                    id="file_upload">
                @error('file_upload')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-2">
                <label for="kategori_id" class="form-label">Kategori</label>
                <select class="form-select @error('kategori_id') is-invalid @enderror" name="kategori_id">
                    @foreach ($kategoris as $kategori)
                        @if (old('kategori_id', $berita->kategori_id) == $kategori->id)
                            <option value="{{ $kategori->id }}" selected>{{ $kategori->nama }}</option>
                        @else
                            <option value="{{ $kategori->id }}">{{ $kategori->nama }}</option>
                        @endif
                    @endforeach
                </select>
                @error('kategori_id')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-2">
                <label for="body" class="form-label">Body</label>
                <textarea rows="10" class="form-control @error('body') is-invalid @enderror" name="body">{{ old('body', $berita->body) }}</textarea>
                @error('body')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Update</button>

        </form>
    </div>
@endsection
