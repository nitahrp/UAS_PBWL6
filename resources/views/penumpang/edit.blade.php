@extends('layouts.app')

@section('content')

<div class="container">
    <h3>Edit Data Penumpang</h3>

    <form action="{{ url('/penumpang/' . $row->pen_id) }}" method="post">
        <input type="hidden" name="_method" value="PATCH">
    @csrf
    <div class="mb-3">
        <label>Nama Penumpang</label>
            <input type="text" name="pen_nama" class="form-control" value="{{ $row->pen_nama }}">
    </div>
    <div class="mb-3">
        <label>Asal</label>
            <input type="text" name="pen_asal" class="form-control" value="{{ $row->pen_asal }}">
    </div>
    <div class="mb-3">
        <label>Nomor HP</label>
            <input type="text" name="pen_hp" class="form-control" value="{{ $row->pen_hp }}">
    </div>
    <div class="mb-3">
        <label>Jenis Kelamin</label>
        <select name="pen_gender" id="" class="form-control" value="{{ $row->pen_gender }}">
            <option>Laki Laki</option>
            <option>Perempuan</option>
        </select>
    </div>
    <div class="mb-3">
        <input type="submit" value="SIMPAN" class="btn btn-primary">
    </div>

    </form>
</div>

@endsection
