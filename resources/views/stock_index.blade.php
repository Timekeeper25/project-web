@extends('admin.sneat')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class=" col md-16">
            <div class="card">
                <div class="card-header">
                    {{ $judul }}
                </div>
                <div class="card-body">
                    <a href="{{ route('stock.create') }}" class="btn btn-primary">Tambah</a>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <td>ID</td>
                                <td>Kode Barang</td>
                                <td>Nama Barang</td>
                                <td>Gambar Barang</td>
                                <td>Stok Barang</td>
                                <td>Harga Barang</td>
                                <td>Modal Barang</td>
                                <td>Dibuat</td>
                                <td>Diupdate</td>
                                <td>Aksi</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($stock as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->kode_barang }}</td>
                                <td>{{ $item->nama_barang }}</td>
                                <td>
                                    @if ($item->gambar_barang != '')
                                        <div class="col-md-4">
                                            <img src="{{ asset('images/' . $item->gambar_barang) }}" alt="Gambar barang" width='100'>
                                        </div>
                                    @endif
                                </td>
                                <td>{{ $item->stok_barang }}</td>
                                <td>Rp. {{ number_format($item->harga_barang, 0, ',', '.') }}</td>
                                <td>Rp. {{ number_format($item->modal_barang, 0, ',', '.') }}</td>
                                <td>{{ $item->created_at }}</td>
                                <td>{{ $item->updated_at }}</td>
                                <td>
                                    <a href="/stock/{{ $item->id }}/edit" class="btn btn-primary">
                                        Edit
                                    </a>
                                    <form action="/stock/{{ $item->id }}" method="POST" class="d-inline">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-danger">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        
                        </tbody>
                    </table>
                    {{ $stock->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection