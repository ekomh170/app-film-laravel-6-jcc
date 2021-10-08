@extends('template.master')
@section('judul')
| Tambah Data Menu Peran
@endsection
@section('judul_sub')
Tambah Data Menu Peran
@endsection
@section('content')
<div class="h2 text-center">Tambah Data</div>
<hr style="width:75%">
<form action="/peran" method="POST">
    @csrf
    <div class="form-group">
        <label for="film">Nama Film</label>
        <select class="custom-select" name="film_id" id="film_id">
            <option selected>-- Pilih Film --</option>
            @foreach ($film as $item)
            <option value="{{ $item->id }}">{{ $item->judul }}</option>
            @endforeach
        </select>
        @error('tahun')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="cast">Cast</label>
        <select class="custom-select" name="cast_id" id="cast_id">
            <option selected>-- Pilih Cast --</option>
            @foreach ($cast as $item)
            <option value="{{ $item->id }}">{{ $item->nama }}</option>
            @endforeach
        </select>
        @error('tahun')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="nama">Nama Peran</label>
        <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan Nama Persan">
        @error('nama')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Tambah</button>
</form>
<a href="../peran/"><button class="btn btn-danger mt-3">Kembali</button></a>
@endsection
