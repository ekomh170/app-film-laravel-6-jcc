@extends('template.master')
@section('judul')
| Kumpulan Data Menu Cast
@endsection
@section('judul_sub')
Data Cast
@endsection
@section('content')
@auth
<a href="/cast/create"><button type="button" class="btn btn-outline-success"><i
            class="fas fa-plus-square"></i></button></a>
@endauth
<div class="h2 mb-3 text-center">Data Cast</div>
<hr style="width:75%">
<table id="example1" class="table table-bordered mt-3 text-center">
    <thead>
        <tr>
            <th style="width: 10px">No</th>
            <th>Nama</th>
            <th>Umur</th>
            <th>Menu Access</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($cast as $key => $data)
        <tr>
            <td>{{ $key + 1 }}</td>
            <td>{{ $data->nama }}</td>
            <td>{{ $data->umur }}</td>
            <td>
                <a href="/cast/{{$data->id}}" class="btn btn-outline-info"><i class="fas fa-eye"></i></a>
                @auth
                <a href="/cast/{{$data->id}}/edit" class="btn btn-outline-primary"><i class="far fa-edit"></i></a>
                <form action="/cast/{{$data->id}}" method="POST">
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