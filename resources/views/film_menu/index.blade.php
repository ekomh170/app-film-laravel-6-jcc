@extends('template.master')
@section('judul')
| Kumpulan Data Menu film
@endsection
@section('judul_sub')
Data film
@endsection
@section('content')
@auth
<a href="/film/create"><button type="button" class="btn btn-outline-success"><i
            class="fas fa-plus-square"></i></button></a>
@endauth
<a href="{{ url('film/view2') }}"><button type="button" class="btn btn-outline-warning"><i
            class="fas fa-eye"></i></button></a>
<div class="h2 mb-3 text-center">Data Film</div>
<hr style="width:75%">
<table id="example1" class="table table-bordered mt-3 text-center">
    <thead>
        <tr>
            <th style="width: 10px">No</th>
            <th>Judul</th>
            <th>Ringkasan</th>
            <th>Tahun</th>
            <th>Genre</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($film as $key => $data)
        <tr>
            <td>{{ $key + 1 }}</td>
            <td>{{ $data->judul }}</td>
            <td>{{ $data->ringkasan }}</td>
            <td>{{ $data->tahun }}</td>
            <td>{{ $data->genre->nama }}</td>
            <td>
                <a href="/film/{{$data->id}}" class="btn btn-outline-info"><i class="fas fa-eye"></i></a>
                @auth
                <a href="/film/{{$data->id}}/edit" class="btn btn-outline-primary"><i class="far fa-edit"></i></a>
                <form action="/film/{{$data->id}}" method="POST">
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
