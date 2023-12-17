@extends('admin.sneat')
@section('content')
<div class="card">
    <div class="card-header">EDIT KASIR {{ $cashier->nama_kasir }}</div>
    <div class="card-body">
        <form action="/cashier/{{ $cashier->id }}" method="POST">
            @method('PUT')
            @csrf
            <div class="form-group mt-1">
                <div class="form-group mt-1">
                    <label for="my-input">Kode Kasir</label>
                    <input type="text" class="form-control" name="kode_kasir"
                    value="{{ $cashier->kode_kasir ?? old('kode_kasir') }}">
                    <span class="text-danger"> {{ $errors->first('kode_kasir') }}</span>
                </div>
                <div class="form-group mt-1">
                    <label for="my-input">Nama Kasir</label>
                    <input type="text" class="form-control" name="nama_kasir"
                    value="{{ $cashier->nama_kasir ?? old('nama_kasir') }}">
                    <span class="text-danger"> {{ $errors->first('nama_kasir') }}</span>
                </div>
                <div class="form-group mt-1">
                    <label for="my-input">Jenis Kelamin</label>
                    <input type="text" class="form-control" name="jenis_kelamin"
                    value="{{ $cashier->jenis_kelamin ?? old('jenis_kelamin') }}">
                    <span class="text-danger"> {{ $errors->first('jenis_kelamin') }}</span>
                </div>
                <div class="form-group mt-1">
                    <label for="my-input">Nomor HP</label>
                    <input type="text" class="form-control" name="nomor_hp"
                    value="{{ $cashier->nomor_hp ?? old('nomor_hp') }}">
                    <span class="text-danger"> {{ $errors->first('nomor_hp') }}</span>
                </div>
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-primary">UPDATE</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
