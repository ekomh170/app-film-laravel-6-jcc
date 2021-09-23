@extends('template.master')
@section('judul')
| Edit Data Menu Cast
@endsection
@section('judul_sub')
Edit Data Menu Cast
@endsection
@section('content')
<div>
    <h2 class="text-center">Edit Cast</h2>
    <hr style="width:75%">
    <h4>ID Cast : {{$cast->id}}</h4>
    <form action="/cast/{{$cast->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" name="nama" value="{{$cast->nama}}" id="nama"
                placeholder="Masukkan Nama">
            @error('nama')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="umur">Umur</label>
            <input type="number" class="form-control" name="umur" value="{{$cast->umur}}" id="umur"
                placeholder="Masukkan Umur">
            @error('umur')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="bio">Bio</label>
            <textarea class="form-control" name="bio" id="bio" rows="3"
                placeholder="Masukkan Bio">{{$cast->bio}}</textarea>
            @error('bio')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Edit</button>
    </form>
    <a href="../../cast/"><button class="btn btn-danger mt-3">Kembali</button></a>
</div>
@endsection
