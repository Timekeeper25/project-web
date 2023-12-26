@extends('admin.sneat')
@section('content')

@foreach ($OrderDetail as $item)
<div class="col-md-12">
    <div class="card">
        <div class="row d-flex align-items-center">
            <div class="col-md-6 text-center mb-5">
                @if ($item->gambar != '')
                <img src="{{ asset('images/' . $item->gambar) }}" alt="Gambar barang" width='450'>
                @endif
            </div>
            <div class="col-md-6">
                <h4 style="font-weight: bold;">
                   Nama Pembeli 
                </h4>
                <p style="font-weight: 100;">{{ $item->nama }}</p>
                <h4 style="font-weight: bold;">
                   Email 
                </h4>
                <p style="font-weight: 100;">{{ $item->email }}</p>
                <h4 style="font-weight: bold;">
                   Alamat 
                </h4>
                <p style="font-weight: 100;">{{ $item->alamat }}</p>
                <h4 style="font-weight: bold;">
                   Nama Barang 
                </h4>
                <p style="font-weight: 100;">{{ $item->nama_barang }}</p>
                <h4 style="font-weight: bold;">
                   Jumlah Barang 
                </h4>
                <p style="font-weight: 100;">{{$item->jumlah}} Unit</p>
                <h4 style="font-weight: bold;">
                   Total 
                </h4>
                <p style="font-weight: 100;">Rp. {{ number_format($item->harga, 0, ',', '.') }}</p>
            </div>
        </div>
    </div>

    <br>
</div>
@endforeach
@endsection