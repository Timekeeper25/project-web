@extends('admin.sneat')
@section('content')
<div class="container-fluid">
    <!-- Tampilkan informasi transaksi detail sesuai kebutuhan -->
    <div class="row justify-content-center col-md-12">
        <div class="col md-6">
            <div class="card">
                <div class="card-body">
                    {{-- @if ($transactionDetail)
                        @if ($transactionDetail->gambar != '')
                            <div class="col-md-4">
                                <img src="{{ asset('images/' . $transactionDetail->gambar) }}" alt="Gambar barang" width='100'>
                            </div>
                        @endif
                        <!-- Tampilkan informasi lainnya sesuai kebutuhan -->
                    @else
                        <p>Data transaksi tidak ditemukan.</p>
                    @endif --}}
                </div>
                
            </div>
            {{ $transactionDetail->transactions_id}}
            {{ $transactionDetail->kode_kasir}}
            {{ $transactionDetail->kode_pelanggan}}
            {{ $transactionDetail->jumlah_barang}}
            {{ $transactionDetail->gambar}}
            {{ $transactionDetail->harga}}
        </div>
        <!-- Tambahkan bagian tampilan sebelah kanan sesuai kebutuhan -->
    </div>
</div>
@endsection
