@extends('template.master')
@section('judul')
| Tambah Data Menu Film
@endsection
@section('judul_sub')
Tambah Data Menu Film
@endsection
@section('content')
<div class="h2 text-center">Tambah Data</div>
<hr style="width:75%">
<form action="/film" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="judul">Judul</label>
        <input type="text" class="form-control" name="judul" id="judul" placeholder="Masukkan Judul">
        @error('judul')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="ringkasan">Ringkasan</label>
        <textarea class="form-control" name="ringkasan" id="ringkasan" name="ringkasan" rows="3"
            placeholder="Masukkan Ringkasan"></textarea>
        @error('ringkasan')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="tahun">Tahun</label>
        <input type="number" class="form-control" name="tahun" id="tahun" placeholder="Masukkan Tahun">
        @error('tahun')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="genre">Genre</label>
        <select class="custom-select" name="genre_id" id="genre_id">
            <option selected>-- Pilih Menu Genre Film --</option>
            @foreach ($genre as $item)
            <option value="{{ $item->id }}">{{ $item->nama }}</option>
            @endforeach
        </select>
        @error('genre')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="poster">Poster Film</label>
        <input type="file" class="form-control-file" id="poster" name="poster">
    </div>
    <button type="submit" class="btn btn-primary">Tambah</button>
</form>
<a href="../film/"><button class="btn btn-danger mt-3">Kembali</button></a>
@endsection
