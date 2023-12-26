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
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <td>Tanggal</td>
                                <td>ID Order</td>
                                <td>Status</td>
                                <td>Detail</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($order as $item)
                                <tr>
                                    <td>{{ $item->created_at->format('Y-m-d') }}</td>
                                    <td>{{ $item->order_id }}</td>
                                    <td>{{ $item->status_pembayaran }}</td>
                                    <td>
                                        <a href="{{ route('orderDetail.show', $item->order_id) }}" class="btn btn-primary">Detail</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $order->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection