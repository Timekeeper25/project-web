@extends('admin.sneat')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        {{ $judul }}
                    </div>
                    <div class="card-body">
                        <form action="/transactionDetail" method="POST">
                            @method('POST')
                            @csrf
                            <div class="form-group mt-1">
                                <label for="my-input">ID Transaksi</label>
                                <input type="text" class="form-control" name="transactions_id"
                                value="{{ old('transactions_id')}}">
                                <span class="text-danger"> {{ $errors->first('transactions_id') }}</span>
                            </div>
                            <div class="form-group mt-1">
                                <label for="my-input">Kode Kasir</label>
                                <input type="text" class="form-control" name="kode_kasir"
                                value="{{ old('kode_kasir')}}">
                                <span class="text-danger"> {{ $errors->first('kode_kasir') }}</span>
                            </div>
                            <div class="form-group mt-1">
                                <label for="my-input">Nama Pelanggan</label>
                                <input type="text" class="form-control" name="nama_pelanggan"
                                value="{{ old('nama_pelanggan')}}">
                                <span class="text-danger"> {{ $errors->first('nama_pelanggan') }}</span>
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

