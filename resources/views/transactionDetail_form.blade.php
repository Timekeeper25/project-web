@extends('admin.sneat')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        {{ $judul }}
                    </div>
                    <div class="card-body">
                        <form action="/transactionDetail" method="POST">
                            @method('POST')
                            @csrf
                            <div class="form-group mt-1">
                                <label for="my-input">ID Transaksi</label>
                                <input type="text" class="form-control" name="transactions_id"
                                value="{{ old('transactions_id')}}">
                                <span class="text-danger"> {{ $errors->first('transactions_id') }}</span>
                            </div>
                            <div class="form-group mt-1">
                                <label for="my-input">Kode Kasir</label>
                                <input type="text" class="form-control" name="kode_kasir"
                                value="{{ old('kode_kasir')}}">
                                <span class="text-danger"> {{ $errors->first('kode_kasir') }}</span>
                            </div>
                            <div class="form-group mt-1">
                                <label for="my-input">Kode Pelanggan</label>
                                <input type="text" class="form-control" name="kode_pelanggan"
                                value="{{ old('kode_pelanggan')}}">
                                <span class="text-danger"> {{ $errors->first('kode_pelanggan') }}</span>
                            </div>
                            <div class="form-group mt-1">
                                <label for="my-input">Kode Barang</label>
                                <input type="text" class="form-control" name="kode_barang"
                                value="{{ old('kode_barang')}}">
                                <span class="text-danger"> {{ $errors->first('kode_barang') }}</span>
                            </div>
                            <div class="form-group mt-1">
                                <label for="my-input">Jumlah Barang</label>
                                <input type="text" class="form-control" name="jumlah_barang"
                                value="{{ old('jumlah_barang')}}">
                                <span class="text-danger"> {{ $errors->first('jumlah_barang') }}</span>
                            </div>
                            <div class="form-group mt-1">
                                <label for="my-input">Harga</label>
                                <input type="text" class="form-control" name="harga" value="{{ old('harga')}}">
                            </div>

                            <div class="form-group mt-2">
                                <button type="submit" class="btn btn-primary">SIMPAN</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        
        document.addEventListener("DOMContentLoaded", function() {
        const kodeBarangInput = document.querySelector('[name="kode_barang"]');
        const hargaInput = document.querySelector('[name="harga"]');
        const errorHarga = document.querySelector('#error-harga');

        kodeBarangInput.addEventListener("blur", function() {
            const kodeBarang = kodeBarangInput.value;

            // Make an AJAX request to get the harga_barang based on the kode_barang
            fetch(`/getHargaBarang/${kode_barang}`)
            .then(response => response.json())
            .then(data => {
                if (data.harga_barang !== null) {
                    hargaInput.value = data.harga_barang;
                    errorHarga.innerText = ''; // Clear error message if any
                } else {
                    // Display an error message if harga_barang is not found
                    hargaInput.value = '';
                    errorHarga.innerText = 'Harga barang tidak ditemukan';
                }
            })
            .catch(error => {
                console.error('Error fetching harga barang:', error);
                errorHarga.innerText = 'Error fetching harga barang';
            });
        });
    });
    </script>

@endsection

