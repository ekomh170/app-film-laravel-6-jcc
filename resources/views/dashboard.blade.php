@extends('template.master')
@section('judul')
| Dashboard
@endsection
@section('content')
<h3>Selamat Datang</h3>
<div class="mb-2">Dashboard adalah halaman berisi tentang ringkasan informasi.</div>
<hr>
<h4 class="mt-2">Aplikasi Informasi Film Sederhana</h4>
<div class="mb-3">Aplikasi Informasi Film Sederhana Ini Adalah Aplikasi yang dikembangkan dari kumpulan materi saat
    belajar materi laravel
    di jabar coding camp lalu untuk beberapa fitur saya kembangkan lagi sendiri, walaupun saat masih tahap pengerjaan
    karena
    belum selesai.</div>
<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-3 col-6">
                <div class="small-box bg-dark">
                    <div class="inner">
                        <h3 class="text-center">{{ $cast }}</h3>
                        <p class="text-center">Menu Data Cast</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="/cast" class="small-box-footer">Data Menu Cast <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
                <div class="small-box bg-dark">
                    <div class="inner">
                        <h3 class="text-center">{{ $film }}</h3>
                        <p class="text-center">Menu Data Film</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="/cast" class="small-box-footer">Data Menu Film <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
                <div class="small-box bg-dark">
                    <div class="inner">
                        <h3 class="text-center">{{ $genre }}</h3>
                        <p class="text-center">Menu Data Genre</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="/cast" class="small-box-footer">Data Menu Genre <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
                <div class="small-box bg-dark">
                    <div class="inner">
                        <h3 class="text-center">{{ $user }}</h3>
                        <p class="text-center">Menu Data User Yang Terdaftar</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="/profile" class="small-box-footer">Data Menu User Yang Terdaftar <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>
    </div>
    {{-- </section> --}}

    @endsection
