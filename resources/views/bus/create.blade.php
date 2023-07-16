@extends('layouts.app')

@section('content')

<h2>Input Bus</h2>

<form action="{{ url('/bus') }}" method="post">
    @csrf
    <div class="mb-3">
        <label>Nomor Bus</label>
            <input type="text" name="bus_nomor" class="form-control">
    </div>
    <div class="mb-3">
        <label>Rute Bus</label>
            <select name="bus_rute" id="" class="form-control">
                <option>Medan - Rantau Prapat</option>
                <option>Medan - Kota Pinang</option>
                <option>Medan - Sosa</option>
                <option>Medan - Gunung Tua</option>
                <option>Medan - Padangsidimpuan</option>
            </select>
    </div>
    <div class="mb-3">
        <label>Jenis Bus</label>
        <select name="bus_jenis" id="" class="form-control">
                <option>Ekonomi</option>
                <option>AC</option>
                <option>Royal</option>
            </select>
    </div>
    <div class="mb-3">
        <input type="submit" value="SIMPAN" class="btn btn-primary">
    </div>
</form>

@endsection