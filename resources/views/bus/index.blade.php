@extends ('layouts.app')

@section('content')

<div class="container">

<h2>
    Data Bus
    <a class="btn btn-primary btn-sm float-end" href="{{ url('bus/create') }}">Tambah Data</a>
</h2>

<table class="table table-striped">
    <tr>
        <th>ID</th>
        <th>Nomor Bus</th>
        <th>Rute Bus</th>
        <th>Jenis Bus</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </tr>
    @foreach ($rows as $row)
    <tr>
        <td>{{$row->bus_id}}</td>
        <td>{{$row->bus_nomor}}</td>
        <td>{{$row->bus_rute}}</td>
        <td>{{$row->bus_jenis}}</td>
        <td><a href="{{ url('bus/' . $row->bus_id . '/edit') }}" class="btn btn-warning">Edit</a></td>
        <td>
            <form action="{{ url('bus/' . $row->bus_id) }}" method="post">
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