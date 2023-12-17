@extends('admin.sneat')
@section('content')
<div class="card">
    <div class="card-header">EDIT PELANGGAN {{ $customer->nama_pelanggan }}</div>
    <div class="card-body">
        <form action="/customer/{{ $customer->id }}" method="POST">
            @method('PUT')
            @csrf
            <div class="form-group mt-1">
                <div class="form-group mt-1">
                    <label for="my-input">Kode Pelanggan</label>
                    <input type="text" class="form-control" name="kode_pelanggan"
                    value="{{ $customer->kode_pelanggan ?? old('kode_pelanggan') }}">
                    <span class="text-danger"> {{ $errors->first('kode_pelanggan') }}</span>
                </div>
                <div class="form-group mt-1">
                    <label for="my-input">Nama Pelanggan</label>
                    <input type="text" class="form-control" name="nama_pelanggan"
                    value="{{ $customer->nama_pelanggan ?? old('nama_pelanggan') }}">
                    <span class="text-danger"> {{ $errors->first('nama_pelanggan') }}</span>
                </div>
                <div class="form-group mt-1">
                    <label for="my-input">Alamat Pelanggan</label>
                    <input type="text" class="form-control" name="alamat_pelanggan"
                    value="{{ $customer->alamat_pelanggan ?? old('alamat_pelanggan') }}">
                    <span class="text-danger"> {{ $errors->first('alamat_pelanggan') }}</span>
                </div>
                <div class="form-group mt-1">
                    <label for="my-input">Nomor HP</label>
                    <input type="text" class="form-control" name="nomor_hp"
                    value="{{ $customer->nomor_hp ?? old('nomor_hp') }}">
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
