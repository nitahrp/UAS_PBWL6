@extends('layouts.app')

@section('content')

<h2>Input Penumpang</h2>

<form action="{{ url('/penumpang') }}" method="post">
    @csrf
    <div class="mb-3">
        <label>Nama Penumpang</label>
            <input type="text" name="pen_nama" class="form-control">
    </div>
    <div class="mb-3">
        <label>Asal</label>
            <input type="text" name="pen_asal" class="form-control">
    </div>
    <div class="mb-3">
        <label>Nomor HP</label>
            <input type="text" name="pen_hp" class="form-control">
    </div>
    <div class="mb-3">
        <label>Jenis Kelamin</label>
        <select name="pen_gender" id="" class="form-control">
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