@extends('template.master')
@section('judul')
| Kumpulan Data Menu genre
@endsection
@section('judul_sub')
Detail genre
@endsection
@section('content')
<div class="h2 mt-5 mb-3 text-center">Data genre</div>
<hr style="width:75%">
<center>
    <div class="card" style="width:400px">
        <div class="card-body">
            <h4 class="card-text"><b>ID genre</b> : {{ $genre->id }}</h4>
            <hr style="width:75%">
            <h6 class="card-text text-left"><b>Nama genre</b> : {{ $genre->nama }}</h6>
            <a href="../genre" class="btn btn-outline-dark">Kembali</a>
        </div>
    </div>
</center>
@endsection
