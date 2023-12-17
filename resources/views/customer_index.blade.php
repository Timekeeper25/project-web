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
                    <a href="{{ route('customer.create') }}" class="btn btn-primary">Tambah</a>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <td>ID</td>
                                <td>Kode Pelanggan</td>
                                <td>Nama Pelanggan</td>
                                <td>Alamat Pelanggan</td>
                                <td>Nomor HP</td>
                                <td>Aksi</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($customer as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->kode_pelanggan }}</td>
                                    <td>{{ $item->nama_pelanggan }}</td>
                                    <td>{{ $item->alamat_pelanggan }}</td>
                                    <td>{{ $item->nomor_hp }}</td>
                                    <td>
                                        <a href="/customer/{{ $item->id }}/edit" class="btn btn-primary">
                                            Edit
                                        </a>
                                        <form href="/customer/{{ $item->id }}" method="POST" class="d-inline">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-danger">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $customer->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection