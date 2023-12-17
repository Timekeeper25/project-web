@extends('admin.sneat')
@section('content')
<div class="card">
    <div class="card-header">EDIT BARANG {{ $stock->nama_barang }}</div>
    <div class="card-body">
        <form action="/stock/{{ $stock->id }}" method="POST">
            @method('PUT')
            @csrf
            <div class="form-group mt-1">
                <div class="form-group mt-1">
                    <label for="my-input">Kode Barang</label>
                    <input type="text" class="form-control" name="kode_barang"
                    value="{{ $stock->kode_barang ?? old('kode_barang') }}">
                    <span class="text-danger"> {{ $errors->first('kode_barang') }}</span>
                </div>
                <div class="form-group mt-1">
                    <label for="my-input">Nama Barang</label>
                    <input type="text" class="form-control" name="nama_barang"
                    value="{{ $stock->nama_barang ?? old('nama_barang') }}">
                    <span class="text-danger"> {{ $errors->first('nama_barang') }}</span>
                </div>
                <div class="form-group mt-1">
                    <label for="my-input">Gambar Barang</label>
                    <input type="file" class="form-control" name="gambar_barang"
                    value="{{ old('gambar_barang')}}">
                    <span class="text-danger"> {{ $errors->first('gambar_barang') }}</span>
                    @if($stock->gambar_barang)
                    <small class="form-text text-muted">
                        Current Image: {{ $stock->gambar_barang }}
                    </small>
                    @endif
                </div>
                <div class="form-group mt-1">
                    <label for="my-input">Stok Barang</label>
                    <input type="text" class="form-control" name="stok_barang"
                    value="{{ $stock->stok_barang ?? old('stok_barang') }}">
                    <span class="text-danger"> {{ $errors->first('stok_barang') }}</span>
                </div>
                <div class="form-group mt-1">
                    <label for="my-input">Harga Barang</label>
                    <input type="text" class="form-control" name="harga_barang"
                    value="{{ $stock->harga_barang ?? old('harga_barang') }}">
                    <span class="text-danger"> {{ $errors->first('harga_barang') }}</span>
                </div>
                <div class="form-group mt-1">
                    <label for="my-input">Modal Barang</label>
                    <input type="text" class="form-control" name="modal_barang"
                    value="{{ $stock->modal_barang ?? old('modal_barang') }}">
                    <span class="text-danger"> {{ $errors->first('modal_barang') }}</span>
                </div>
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-primary">UPDATE</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
