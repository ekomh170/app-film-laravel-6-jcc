@extends('template.master')
@section('judul')
| Edit Data Menu profile
@endsection
@section('judul_sub')
Edit Data Menu profile
@endsection
@section('content')
<div>
    <h2 class="text-center">Edit profile</h2>
    <hr style="width:75%">
    <h4>User ID Profile : {{$profile->id}}</h4>
    <form action="/profile/{{$profile->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="email">email</label>
            <input type="text" class="form-control" email="email" value="{{$profile->user->email}}" id="email"
                placeholder="Masukkan email" disabled>
            @error('email')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="name">name</label>
            <input type="text" class="form-control" name="name" value="{{$profile->user->name}}" id="name"
                placeholder="Masukkan name" disabled>
            @error('name')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="umur">Umur</label>
            <input type="number" class="form-control" name="umur" value="{{$profile->umur}}" id="umur"
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
                placeholder="Masukkan Bio">{{$profile->bio}}</textarea>
            @error('bio')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control" name="alamat" value="{{$profile->alamat}}" id="alamat"
                placeholder="Masukkan alamat">
            @error('alamat')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Edit</button>
    </form>
    <a href="../../profile/"><button class="btn btn-danger mt-3">Kembali</button></a>
</div>
@endsection
