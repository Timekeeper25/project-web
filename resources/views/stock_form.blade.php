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
                        <form action="/stock" method="POST" enctype="multipart/form-data">
                            @method('POST')
                            @csrf
                            <div class="form-group mt-1">
                                <label for="my-input">Kode Barang</label>
                                <input type="text" class="form-control" name="kode_barang"
                                value="{{ old('kode_barang')}}">
                                <span class="text-danger"> {{ $errors->first('kode_barang') }}</span>
                            </div>
                            <div class="form-group mt-1">
                                <label for="my-input">Nama Barang</label>
                                <input type="text" class="form-control" name="nama_barang"
                                value="{{ old('nama_barang')}}">
                                <span class="text-danger"> {{ $errors->first('nama_barang') }}</span>
                            </div>
                            <div class="form-group mt-1">
                                <label for="my-input">Gambar Barang</label>
                                <input type="file" class="form-control" name="gambar_barang"
                                value="{{ old('gambar_barang')}}">
                                <span class="text-danger"> {{ $errors->first('gambar_barang') }}</span>
                            </div>
                            <div class="form-group mt-1">
                                <label for="my-input">Stok Barang</label>
                                <input type="text" class="form-control" name="stok_barang"
                                value="{{ old('stok_barang')}}">
                                <span class="text-danger"> {{ $errors->first('stok_barang') }}</span>
                            </div>
                            <div class="form-group mt-1">
                                <label for="my-input">Harga Barang</label>
                                <input type="text" class="form-control" name="harga_barang"
                                value="{{ old('harga_barang')}}">
                                <span class="text-danger"> {{ $errors->first('harga_barang') }}</span>
                            </div>
                            <div class="form-group mt-1">
                                <label for="my-input">Modal Barang</label>
                                <input type="text" class="form-control" name="modal_barang"
                                value="{{ old('modal_barang')}}">
                                <span class="text-danger"> {{ $errors->first('modal_barang') }}</span>
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