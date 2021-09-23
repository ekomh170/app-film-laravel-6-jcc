@extends('template.master')
@section('judul')
| Edit Data Menu Genre
@endsection
@section('judul_sub')
Edit Data Menu Genre
@endsection
@section('content')
<div>
    <h2 class="text-center">Edit Genre</h2>
    <hr style="width:75%">
    <h4>ID Genre : {{$genre->id}}</h4>
    <form action="/genre/{{$genre->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" name="nama" value="{{$genre->nama}}" id="nama"
                placeholder="Masukkan Nama">
            @error('nama')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Edit</button>
    </form>
    <a href="../../genre/"><button class="btn btn-danger mt-3">Kembali</button></a>
</div>
@endsection
