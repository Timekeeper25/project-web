@extends('admin.sneat')
@section('content')
<div class="card">
    <div class="card-header">EDIT KEUNTUNGAN {{ $incomes->kode_transaksi }}</div>
    <div class="card-body">
        <form action="/incomes/{{ $incomes->id }}" method="POST">
            @method('PUT')
            @csrf
            <div class="form-group mt-1">
                <div class="form-group mt-1">
                    <label for="my-input">Kode Transaksi</label>
                    <input type="text" class="form-control" name="kode_transaksi"
                    value="{{ $incomes->kode_transaksi ?? old('kode_transaksi') }}">
                    <span class="text-danger"> {{ $errors->first('kode_transaksi') }}</span>
                </div>
                <div class="form-group mt-1">
                    <label for="my-input">Kode Pelanggan</label>
                    <input type="text" class="form-control" name="kode_pelanggan"
                    value="{{ $incomes->kode_pelanggan ?? old('kode_pelanggan') }}">
                    <span class="text-danger"> {{ $errors->first('kode_pelanggan') }}</span>
                </div>
                <div class="form-group mt-1">
                    <label for="my-input">Kode Kasir</label>
                    <input type="text" class="form-control" name="kode_kasir"
                    value="{{ $incomes->kode_kasir ?? old('kode_kasir') }}">
                    <span class="text-danger"> {{ $errors->first('kode_kasir') }}</span>
                </div>
                <div class="form-group mt-1">
                    <label for="my-input">Kode Barang</label>
                    <input type="text" class="form-control" name="kode_barang"
                    value="{{ $incomes->kode_barang ?? old('kode_barang') }}">
                    <span class="text-danger"> {{ $errors->first('kode_barang') }}</span>
                </div>
                <div class="form-group mt-1">
                    <label for="my-input">Jumlah Barang</label>
                    <input type="text" class="form-control" name="jumlah_barang"
                    value="{{ $incomes->jumlah_barang ?? old('jumlah_barang') }}">
                    <span class="text-danger"> {{ $errors->first('jumlah_barang') }}</span>
                </div>
                <div class="form-group mt-1">
                    <label for="my-input">Total</label>
                    <input type="text" class="form-control" name="total"
                    value="{{ $incomes->total ?? old('total') }}">
                    <span class="text-danger"> {{ $errors->first('total') }}</span>
                </div>
                <div class="form-group mt-1">
                    <label for="my-input">Modal</label>
                    <input type="text" class="form-control" name="modal"
                    value="{{ $incomes->modal ?? old('modal') }}">
                    <span class="text-danger"> {{ $errors->first('modal') }}</span>
                </div>
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-primary">UPDATE</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
