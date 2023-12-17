@extends('admin.sneat')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class=" col md-12">
            <div class="card">
                <div class="card-header">
                    {{ $judul }}
                </div>
                <div class="card-body">
                    <a href="{{ route('incomes.create') }}" class="btn btn-primary">Tambah</a>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <td>ID</td>
                                <td>Kode Transaksi</td>
                                <td>Kode Pelanggan</td>
                                <td>Kode Kasir</td>
                                <td>Kode Barang</td>
                                <td>Jumlah Barang</td>
                                <td>Total</td>
                                <td>Modal</td>
                                <td>Laba</td>
                                <td>Aksi</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($incomes as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->kode_transaksi }}</td>
                                    <td>{{ $item->kode_pelanggan }}</td>
                                    <td>{{ $item->kode_kasir }}</td>
                                    <td>{{ $item->kode_barang }}</td>
                                    <td>{{ $item->jumlah_barang }}</td>
                                    <td>Rp. {{ number_format($item->total, 0, ',', '.') }}</td>
                                    <td>Rp. {{ number_format($item->modal, 0, ',', '.') }}</td>
                                    <td>Rp. {{ number_format($item->laba, 0, ',', '.') }}</td>
                                    <td>
                                        <a href="/incomes/{{ $item->id }}/edit" class="btn btn-primary">
                                            Edit
                                        </a>
                                        <form href="/incomes/{{ $item->id }}" method="POST" class="d-inline">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-danger">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $incomes->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection