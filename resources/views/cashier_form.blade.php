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
                        <form action="/cashier" method="POST">
                            @method('POST')
                            @csrf
                            <div class="form-group mt-1">
                                <label for="my-input">Kode Kasir</label>
                                <input type="text" class="form-control" name="kode_kasir"
                                value="{{ old('kode_kasir')}}">
                                <span class="text-danger"> {{ $errors->first('kode_kasir') }}</span>
                            </div>
                            <div class="form-group mt-1">
                                <label for="my-input">Nama Kasir</label>
                                <input type="text" class="form-control" name="nama_kasir"
                                value="{{ old('nama_kasir')}}">
                                <span class="text-danger"> {{ $errors->first('nama_kasir') }}</span>
                            </div>
                            <div class="form-group mt-1">
                                <label for="my-input">Jenis Kelamin</label>
                                <input type="text" class="form-control" name="jenis_kelamin"
                                value="{{ old('jenis_kelamin')}}">
                                <span class="text-danger"> {{ $errors->first('jenis_kelamin') }}</span>
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