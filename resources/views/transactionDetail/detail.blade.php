@extends('admin.sneat')
@section('content')

@foreach ($transactionDetail as $item)
<div class="col-md-12">
    <div class="card">
        <div class="row d-flex align-items-center">
            <div class="col-md-6 text-center mb-5">
                @if ($item->gambar != '')
                <img src="{{ asset('images/' . $item->gambar) }}" alt="Gambar barang" width='450'>
                @endif
            </div>
            <div class="col-md-6">
                <h1 style="font-weight: bold;">
                   Nama Barang 
                </h1>
                <h3 style="font-weight: 100;">{{ $item->nama_barang }}</h3>
                <h1 style="font-weight: bold;">
                   Jumlah Barang 
                </h1>
                <h3 style="font-weight: 100;">{{$item->jumlah_barang}}</h3>
                <h1 style="font-weight: bold;">
                   Total 
                </h1>
                <h3 style="font-weight: 100;">{{$item->harga}}</h3>
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection