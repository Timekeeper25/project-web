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
                    <a href="{{ route('cashier.create') }}" class="btn btn-primary">Tambah</a>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <td>ID</td>
                                <td>Kode Kasir</td>
                                <td>Nama Kasir</td>
                                <td>Jenis Kelamin</td>
                                <td>Nomor HP</td>
                                <td>Aksi</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cashier as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->kode_kasir }}</td>
                                    <td>{{ $item->nama_kasir }}</td>
                                    <td>{{ $item->jenis_kelamin }}</td>
                                    <td>{{ $item->nomor_hp }}</td>
                                    <td>
                                        <a href="/cashier/{{ $item->id }}/edit" class="btn btn-primary">
                                            Edit
                                        </a>
                                        <form href="/cashier/{{ $item->id }}" method="POST" class="d-inline">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-danger">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $cashier->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection