@extends('layouts.app')

@section('content')

<div class="container">
    <h3>Edit Data Bus</h3>

    <form action="{{ url('/bus/' . $row->bus_id) }}" method="post">
        <input type="hidden" name="_method" value="PATCH">
    @csrf
    <div class="mb-3">
        <label>Nomor Bus</label>
            <input type="text" name="bus_nomor" class="form-control" value="{{ $row->bus_nomor }}">
    </div>
    <div class="mb-3">
        <label>Rute Bus</label>
            <select name="bus_rute" id="" class="form-control" value="{{ $row->bus_rute }}">
                <option>Medan - Rantau Prapat</option>
                <option>Medan - Kota Pinang</option>
                <option>Medan - Sosa</option>
                <option>Medan - Gunung Tua</option>
                <option>Medan - Padangsidimpuan</option>
            </select>
    </div>
    <div class="mb-3">
        <label>Jenis Bus</label>
        <select name="bus_jenis" id="" class="form-control" value="{{ $row->bus_jenis }}">
                <option>Ekonomi</option>
                <option>AC</option>
                <option>Royal</option>
            </select>
    </div>
    <div class="mb-3">
        <input type="submit" value="SIMPAN" class="btn btn-primary">
    </div>

    </form>
</div>

@endsection
