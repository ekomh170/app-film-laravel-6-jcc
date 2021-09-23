@extends('template.master')
@section('judul')
| Kumpulan Data Menu profile
@endsection
@section('judul_sub')
Detail profile
@endsection
@section('content')
<div class="h2 mt-5 mb-3 text-center">Data profile</div>
<hr style="width:75%">
<center>
    <div class="card" style="width:400px">
        <div class="card-body">
            <h4 class="card-text"><b>ID Profile</b> : {{ $profile->user->id }}</h4>
            <hr style="width:75%">
            <h6 class="card-text text-left"><b>Nama profile</b> : {{ $profile->user->name }}</h6>
            <h6 class="card-text text-left"><b>Email</b> : {{ $profile->user->email }}</h6>
            <h6 class="card-text text-left"><b>Umur</b> : {{ $profile->umur }}</h6>
            <h6 class="card-text text-left"><b>Bio</b> : {{ $profile->bio }}</h6>
            <h6 class="card-text text-left"><b>Akun Dibuat</b> : {{ $profile->user->created_at }}</h6>
            <h6 class="card-text text-left"><b>Akun Diupdate</b> : {{ $profile->user->updated_at }}</h6>
            <a href="../profile" class="btn btn-outline-dark">Ubah Profile</a>
        </div>
    </div>
</center>
@endsection
