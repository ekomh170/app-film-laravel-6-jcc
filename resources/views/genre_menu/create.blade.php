@extends('template.master')
@section('judul')
| Tambah Data Menu Genre
@endsection
@section('judul_sub')
Tambah Data Menu Genre
@endsection
@section('content')
<div class="h2 text-center">Tambah Data</div>
<hr style="width:75%">
<form action="/genre" method="POST">
    @csrf
    <div class="form-group">
        <label for="nama">Nama Genre</label>
        <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan Nama">
        @error('nama')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Tambah</button>
</form>
<a href="../genre/"><button class="btn btn-danger mt-3">Kembali</button></a>
@endsection
