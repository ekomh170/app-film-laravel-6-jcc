@extends('template.master')
@section('judul')
| Kumpulan Data Menu Peran
@endsection
@section('judul_sub')
Data Peran
@endsection
@section('content')
@auth
<a href="/peran/create"><button type="button" class="btn btn-outline-success"><i
            class="fas fa-plus-square"></i></button></a>
@endauth
<div class="h2 mb-3 text-center">Data Peran</div>
<hr style="width:75%">
<table id="example1" class="table table-bordered mt-3 text-center">
    <thead>
        <tr>
            <th style="width: 10px">No</th>
            <th>Nama Film</th>
            <th>Nama Cast</th>
            <th>Nama Peran</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($peran as $key => $data)
        <tr>
            <td>{{ $key + 1 }}</td>
            <td>{{ $data->cast->nama }}</td>
            <td>{{ $data->film->judul }}</td>
            <td>{{ $data->nama }}</td>
            <td>
                <a href="/peran/{{$data->id}}" class="btn btn-outline-info"><i class="fas fa-eye"></i></a>
                @auth
                <a href="/peran/{{$data->id}}/edit" class="btn btn-outline-primary"><i class="far fa-edit"></i></a>
                <form action="/peran/{{$data->id}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button input type="submit" class="btn btn-outline-danger my-1" value="Delete"><i
                            class="far fa-trash-alt"></i></button>
                </form>
                @endauth
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection

