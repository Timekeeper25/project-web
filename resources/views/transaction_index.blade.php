@extends('admin.sneat')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col md-12">
            <div class="card">
                <div class="card-header">
                    {{ $judul }}
                </div>
                <div class="card-body">
                    {{-- <a href="{{ route('incomes.create') }}" class="btn btn-primary">Tambah</a> --}}
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <td>Kode Transaksi</td>
                                <td>Total Harga</td>
                                <td>Aksi</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($transaction as $item)
                                <tr>
                                    <td>{{ $item->transactions_id }}</td>
                                    <td>Rp. {{ number_format($item->total_harga, 0, ',', '.') }}</td>
                                    <td>
                                        <a href="{{ route('transactionDetail.show', $item->transactions_id) }}" class="btn btn-primary">Detail</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $transaction->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection