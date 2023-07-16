@extends ('layouts.app')

@section('content')

<div class="container">

<h2>
    Data Transaksi
    <a class="btn btn-primary btn-sm float-end" href="{{ url('transaksi/create') }}">Tambah Data</a>
</h2>

<table class="table table-striped">
    <tr>
        <th>ID</th>
        <th>Nomor Bangku</th>
        <th>Id Bus</th>
        <th>Id Penumpang</th>
        <th>Ongkos</th>
        <th>Hari Keberangkatan</th>
        <th>Jam Keberangkatan</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </tr>
    @foreach ($rows as $row)
    <tr>
        <td>{{$row->tran_id}}</td>
        <td>{{$row->tran_bangku}}</td>
        <td>{{$row->tran_id_bus}}</td>
        <td>{{$row->tran_id_pen}}</td>
        <td>{{$row->tran_ongkos}}</td>
        <td>{{$row->tran_hari}}</td>
        <td>{{$row->tran_jam}}</td>
        <td><a href="{{ url('transaksi/' . $row->tran_id . '/edit') }}" class="btn btn-warning">Edit</a></td>
        <td>
            <form action="{{ url('transaksi/' . $row->tran_id) }}" method="post">
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