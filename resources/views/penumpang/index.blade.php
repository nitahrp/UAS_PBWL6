@extends ('layouts.app')

@section('content')

<div class="container">

<h2>
    Data Penumpang
    <a class="btn btn-primary btn-sm float-end" href="{{ url('penumpang/create') }}">Tambah Data</a>
</h2>

<table class="table table-striped">
    <tr>
        <th>ID</th>
        <th>Nama Penumpang</th>
        <th>Asal</th>
        <th>Nomor HP</th>
        <th>Jenis Kelamin</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </tr>
    @foreach ($rows as $row)
    <tr>
        <td>{{$row->pen_id}}</td>
        <td>{{$row->pen_nama}}</td>
        <td>{{$row->pen_asal}}</td>
        <td>{{$row->pen_hp}}</td>
        <td>{{$row->pen_gender}}</td>
        <td><a href="{{ url('penumpang/' . $row->pen_id . '/edit') }}" class="btn btn-warning">Edit</a></td>
        <td>
            <form action="{{ url('penumpang/' . $row->pen_id) }}" method="post">
            <input type="hidden" name="_method" value="DELETE">
            @csrf
            <input type="submit" value="Delete" class="btn btn-danger">
            </form>
        </td>
    </tr>
    @endforeach
</table>
</div>

@endsection