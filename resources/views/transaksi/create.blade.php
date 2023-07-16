@extends('layouts.app')

@section('content')

<h2>Input Transaksi</h2>

<form action="{{ url('/transaksi') }}" method="post">
    @csrf
    <div class="mb-3">
        <label>Nomor Bangku</label>
            <input type="text" name="tran_bangku" class="form-control">
    </div>
    <div class="mb-3">
            <label class="input-group-text" for="inputGroupSelect01"></label>
            <select class="form-select" id="inputGroupSelect01" name="tran_id_bus" id="tran_id_bus">
                <option selected>Pilih Nomor Bus..</option>
                @foreach ($rowsBus as $Item)
                    <option value="{{ $Item->bus_id }}">{{ $Item->bus_nomor }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label class="input-group-text" for="inputGroupSelect01"></label>
            <select class="form-select" id="inputGroupSelect01" name="tran_id_pen" id="tran_id_pen">
                <option selected>Pilih Nomor Penumpang..</option>
                @foreach ($rowsPenumpang as $Item)
                    <option value="{{ $Item->pen_id }}">{{ $Item->pen_nama }}</option>
                @endforeach
            </select>
        </div>
    <div class="mb-3">
        <label>Ongkos</label>
            <input type="text" name="tran_ongkos" class="form-control">
    </div>
    <div class="mb-3">
        <label>Hari Keberangkatan</label>
        <select name="tran_hari" id="" class="form-control">
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
            <input type="time" name="tran_jam" class="form-control">
    </div>
    <div class="mb-3">
        <input type="submit" value="SIMPAN" class="btn btn-primary">
    </div>
</form>
</div>

@endsection