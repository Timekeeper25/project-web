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
                        <form action="/customer" method="POST">
                            @method('POST')
                            @csrf
                            <div class="form-group mt-1">
                                <label for="my-input">Kode Pelanggan</label>
                                <input type="text" class="form-control" name="kode_pelanggan"
                                value="{{ old('kode_pelanggan')}}">
                                <span class="text-danger"> {{ $errors->first('kode_pelanggan') }}</span>
                            </div>
                            <div class="form-group mt-1">
                                <label for="my-input">Nama Pelanggan</label>
                                <input type="text" class="form-control" name="nama_pelanggan"
                                value="{{ old('nama_pelanggan')}}">
                                <span class="text-danger"> {{ $errors->first('nama_pelanggan') }}</span>
                            </div>
                            <div class="form-group mt-1">
                                <label for="my-input">Alamat Pelanggan</label>
                                <input type="text" class="form-control" name="alamat_pelanggan"
                                value="{{ old('alamat_pelanggan')}}">
                                <span class="text-danger"> {{ $errors->first('alamat_pelanggan') }}</span>
                            </div>
                            <div class="form-group mt-1">
                                <label for="my-input">Nomor HP</label>
                                <input type="text" class="form-control" name="nomor_hp"
                                value="{{ old('nomor_hp')}}">
                                <span class="text-danger"> {{ $errors->first('nomor_hp') }}</span>
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