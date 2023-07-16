@extends('layouts.app')

@section('content')

<div class="container">
    <h3>Edit Data Transaksi</h3>

    <form action="{{ url('/transaksi/' . $row->tran_id) }}" method="post">
        <input type="hidden" name="_method" value="PATCH">
    @csrf
    <div class="mb-3">
        <label>Nomor Bangku</label>
            <input type="text" name="tran_bangku" class="form-control" value="{{ $row->tran_bangku }}">
    </div>
    <div class="mb-3">
        <label>ID Bus</label>
            <input type="text" name="tran_id_bus" class="form-control" value="{{ $row->tran_id_bus }}">
    </div>
    <div class="mb-3">
        <label>ID Penumpang</label>
            <input type="text" name="tran_id_pen" class="form-control" value="{{ $row->tran_id_pen }}">
    </div>
    <div class="mb-3">
        <label>Ongkos</label>
            <input type="text" name="tran_ongkos" class="form-control" value="{{ $row->tran_ongkos }}">
    </div>
    <div class="mb-3">
        <label>Hari Keberangkatan</label>
        <select name="tran_hari" id="" class="form-control" value="{{ $row->tran_hari }}">
            <option>Senin</option>
            <option>Selasa</option>
            <option>Rabu</option>
            <option>Kamis</option>
            <option>Jumat</option>
            <option>Sabtu</option>
            <option>Minggu</option>
        </select>
    </div>
    <div class="mb-3">
        <label>Jam Keberangkatan</label>
            <input type="time" name="tran_jam" class="form-control" value="{{ $row->tran_jam }}">
    </div>
    <div class="mb-3">
        <input type="submit" value="SIMPAN" class="btn btn-primary">
    </div>

    </form>
</div>

@endsection
