@extends('template.master')
@section('judul')
| Edit Data Menu Peran
@endsection
@section('judul_sub')
Edit Data Menu Peran
@endsection
@section('content')
<div class="h2 text-center">Edit Data</div>
<hr style="width:75%">
<h4>ID Peran : {{$peran->id}}</h4>
<form action="/peran/{{$peran->id}}" method="POST">
    @csrf
    @method('PUT') <div class="form-group">
        <label for="film">Nama Film</label>
        <select class="custom-select" name="film_id" id="film_id">
            <option selected>-- Pilih Menu Film --</option>
            @foreach ($film as $item)
            @if ($item->id === $peran->film_id )
            <option value="{{ $item->id }}" selected>{{ $item->judul }}</option>
            @else
            <option value="{{ $item->id }}">{{ $item->judul }}</option>
            @endif
            @endforeach
        </select>
        @error('film_id')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="cast">Cast</label>
        <select class="custom-select" name="cast_id" id="cast_id">
            <option selected>-- Pilih Menu Cast --</option>
            @foreach ($cast as $item)
            @if ($item->id === $peran->cast_id )
            <option value="{{ $item->id }}" selected>{{ $item->nama }}</option>
            @else
            <option value="{{ $item->id }}">{{ $item->nama }}</option>
            @endif
            @endforeach
        </select>
        @error('cast_id')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="nama">Nama Peran</label>
        <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan Nama Peran"
            value="{{ $peran->nama }}">
        @error('nama')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Edit</button>
</form>
<a href="../../peran/"><button class="btn btn-danger mt-3">Kembali</button></a>
@endsection
