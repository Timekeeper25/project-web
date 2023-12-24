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
                                <td>Laba</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($incomes as $item)
                                <tr>
                                    <td>{{ $item->created_at->format('Y-m-d') }}</td>
                                    <td>Rp. {{ number_format($item->laba, 0, ',', '.') }}</td>
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