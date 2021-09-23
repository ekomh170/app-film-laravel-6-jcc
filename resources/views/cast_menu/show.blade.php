@extends('template.master')
@section('judul')
| Kumpulan Data Menu Cast
@endsection
@section('judul_sub')
Detail Cast
@endsection
@section('content')
<div class="h2 mt-5 mb-3 text-center">Data Cast</div>
<hr style="width:75%">
<center>
    <div class="card" style="width:400px">
        <img class="card-img-top" src="{{ asset('/adminlte') }}/dist/img/default_cast.png" width="200px" height="200px"
            alt="Card image">
        <div class="card-body">
            <h4 class="card-text"><b>ID Cast</b> : {{ $cast->id }}</h4>
            <hr style="width:75%">
            <h6 class="card-text text-left"><b>Nama Cast</b> : {{ $cast->nama }}</h6>
            <h6 class="card-text text-left"><b>Umur</b> : {{ $cast->umur }}</h6>
            <p class="card-text text-left"><b>Bio</b> : {{ $cast->bio }}</p>
            <a href="../cast" class="btn btn-outline-dark">Kembali</a>
        </div>
    </div>
</center>
@endsection
