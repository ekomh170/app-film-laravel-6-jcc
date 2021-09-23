@extends('template.master')
@section('judul')
| Tambah Data Menu Cast
@endsection
@section('judul_sub')
Tambah Data Menu Cast
@endsection
@section('content')
<div class="h2 text-center">Tambah Data</div>
<hr style="width:75%">
<form action="/cast" method="POST">
    @csrf
    <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan Nama">
        @error('nama')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="umur">Umur</label>
        <input type="number" class="form-control" name="umur" id="umur" placeholder="Masukkan Umur">
        @error('umur')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="bio">Bio</label>
        <textarea class="form-control" name="bio" id="bio" rows="3" placeholder="Masukkan Bio"></textarea>
        @error('bio')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Tambah</button>
</form>
<a href="../cast/"><button class="btn btn-danger mt-3">Kembali</button></a>
@endsection
