@extends('template.master')
@section('judul')
| Kumpulan Data Menu genre
@endsection
@section('judul_sub')
Data genre
@endsection
@section('content')
@auth
<a href="/genre/create"><button type="button" class="btn btn-outline-success"><i
            class="fas fa-plus-square"></i></button></a>
@endauth
<div class="h2 mb-3 text-center">Data genre</div>
<hr style="width:75%">
<table id="example1" class="table table-bordered mt-3 text-center">
    <thead>
        <tr>
            <th style="width: 10px">No</th>
            <th>Nama</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($genre as $key => $data)
        <tr>
            <td>{{ $key + 1 }}</td>
            <td>{{ $data->nama }}</td>
            <td>
                <a href="/genre/{{$data->id}}" class="btn btn-outline-info"><i class="fas fa-eye"></i></a>
                @auth
                <a href="/genre/{{$data->id}}/edit" class="btn btn-outline-primary"><i class="far fa-edit"></i></a>
                <form action="/genre/{{$data->id}}" method="POST">
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