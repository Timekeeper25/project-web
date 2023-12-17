@extends('layouts.sneat')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        {{ $judul }}
                    </div>
                    <div class="card-body">
                        <form action="/customer" method="POST">
                            @method('POST')
                            @csrf
                            <div class="form-group mt-1">
                                <label for="my-input">Kode Transaksi</label>
                                <input type="text" class="form-control" name="kode_transaksi"
                                value="{{ old('kode_transaksi')}}">
                                <span class="text-danger"> {{ $errors->first('kode_transaksi') }}</span>
                            </div>
                            <div class="form-group mt-1">
                                <label for="my-input">Kode Pelanggan</label>
                                <input type="text" class="form-control" name="kode_pelanggan"
                                value="{{ old('kode_pelanggan')}}">
                                <span class="text-danger"> {{ $errors->first('kode_pelanggan') }}</span>
                            </div>
                            <div class="form-group mt-1">
                                <label for="my-input">Kode Kasir</label>
                                <input type="text" class="form-control" name="kode_kasir"
                                value="{{ old('kode_kasir')}}">
                                <span class="text-danger"> {{ $errors->first('kode_kasir') }}</span>
                            </div>
                            <div class="form-group mt-1">
                                <label for="my-input">Kode Barang</label>
                                <input type="text" class="form-control" name="kode_barang"
                                value="{{ old('kode_barang')}}">
                                <span class="text-danger"> {{ $errors->first('kode_barang') }}</span>
                            </div>
                            <div class="form-group mt-1">
                                <label for="my-input">Jumlah Barang</label>
                                <input type="text" class="form-control" name="jumlah_barang"
                                value="{{ old('jumlah_barang')}}">
                                <span class="text-danger"> {{ $errors->first('jumlah_barang') }}</span>
                            </div>
                            <div class="form-group mt-1">
                                <label for="my-input">Total</label>
                                <input type="text" class="form-control" name="total"
                                value="{{ old('total')}}">
                                <span class="text-danger"> {{ $errors->first('total') }}</span>
                            </div>
                            <div class="form-group mt-1">
                                <label for="my-input">Harga</label>
                                <input type="text" class="form-control" name="harga"
                                value="{{ old('harga')}}">
                                <span class="text-danger"> {{ $errors->first('harga') }}</span>
                            </div>
                            <div class="form-group mt-1">
                                <label for="my-input">Modal</label>
                                <input type="text" class="form-control" name="modal"
                                value="{{ old('modal')}}">
                                <span class="text-danger"> {{ $errors->first('modal') }}</span>
                            </div>
                            <div class="form-group mt-1">
                                <label for="my-input">Laba</label>
                                <input type="text" class="form-control" name="laba"
                                value="{{ old('laba')}}">
                                <span class="text-danger"> {{ $errors->first('laba') }}</span>
                            </div>
                            <div class="form-group mt-2">
                                <button type="submit" class="btn btn-primary">SIMPAN</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection