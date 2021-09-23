@extends('template.master')
@section('judul')
| Edit Data Menu Film
@endsection
@section('judul_sub')
Edit Data Menu Film
@endsection
@section('content')
<div>
    <h2 class="text-center">Edit Film</h2>
    <hr style="width:75%">
    <h4>ID Film : {{$film->id}}</h4>
    <form action="/film/{{$film->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="judul">Judul</label>
            <input type="text" class="form-control" name="judul" id="judul" value="{{ $film->judul }}"
                placeholder="Masukkan Judul">
            @error('judul')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="ringkasan">Ringkasan</label>
            <textarea class="form-control" name="ringkasan" id="ringkasan" name="ringkasan" rows="3"
                placeholder="Masukkan Ringkasan">{{ $film->ringkasan }}</textarea>
            @error('ringkasan')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="tahun">Tahun</label>
            <input type="number" class="form-control" name="tahun" id="tahun" value="{{ $film->tahun }}"
                placeholder="Masukkan Tahun">
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
                @if ($item->id === $film->genre_id )
                <option value="{{ $item->id }}" selected>{{ $item->nama }}</option>
                @else
                <option value="{{ $item->id }}">{{ $item->nama }}</option>
                @endif
                @endforeach
            </select>
            @error('tahun')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="poster">Poster Film</label>
            <input type="file" class="form-control-file" id="poster" name="poster">
        </div> <button type=" submit" class="btn btn-primary">Edit</button>
    </form>
    <a href="../../film/"><button class="btn btn-danger mt-3">Kembali</button></a>
</div>
@endsection
