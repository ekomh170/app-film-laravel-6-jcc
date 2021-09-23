@extends('template.master')
@section('judul')
| Kumpulan Data Menu film
@endsection
@section('judul_sub')
Detail film
@endsection
@section('content')
<div class="h2 mt-5 mb-3 text-center">Data film</div>
<hr style="width:75%">
<center>
    <div class="card" style="width:400px">
        <img class="card-img-top" src="{{ asset('/img') }}/film/{{ $film->poster }}" width="200px" height="200px"
            alt="Card image">
        <div class="card-body">
            <h4 class="card-text"><b>ID film</b> : {{ $film->id }}</h4>
            <hr style="width:75%">
            <h6 class="card-text text-left"><b>Nama Film</b> : {{ $film->judul }}</h6>
            <h6 class="card-text text-left"><b>Nama Film</b> : {{ $film->genre->nama }}</h6>
            <h6 class="card-text text-left"><b>Umur</b> : {{ $film->tahun }}</h6>
            <p class="card-text text-left"><b>Bio</b> : {{ $film->ringkasan }}</p>
            <a href="../film" class="btn btn-outline-dark">Kembali</a>
        </div>
    </div>
</center>
@endsection
