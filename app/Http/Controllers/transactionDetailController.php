<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use Illuminate\Http\Request;

class transactionDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['transactionDetail'] = \App\Models\transactionDetail::paginate(5);
        $data['judul'] = 'Data-Data Transaksi';
        return view('transactionDetail_index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['transactionDetail'] = new \App\Models\transactionDetail();
        $data['route'] = 'transactionDetail.store';
        $data['method'] = 'post';
        $data['tombol'] = 'simpan';
        $data['judul'] = 'Tambah Transaksi';

        return view('transactionDetail_form', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validasiData = $request->validate([
            'transactions_id' => 'required',
            'kode_kasir' => 'required',
            'kode_pelanggan' => 'required',
            'kode_barang' => 'required',
            'jumlah_barang' => 'required',
        ]);
        $transactionDetail = new \App\Models\transactionDetail();
        $transactionDetail -> fill($validasiData);
        $transactionDetail -> save();

        flash('Data Berhasil Disimpan');
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data['transactionDetail'] = \App\Models\transactionDetail::findOrFail($id);
        return view('transactionDetail_edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validasiData = $request->validate([
            'transactions_id' => 'required' . $id,
            'kode_kasir' => 'required',
            'kode_pelanggan' => 'required',
            'kode_barang' => 'required',
            'jumlah_barang' => 'required',

        ]);
        $transactionDetail = \App\Models\transactionDetail::findOrFail($id);
        $transactionDetail -> fill($validasiData);
        $transactionDetail -> save();

        flash('Data Berhasil Diubah');
        return redirect()->route('transactionDetail.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $transactionDetail = \App\Models\transactionDetail::findOrFail($id);
        $transactionDetail->delete();
        flash('Data berhasil Dihapus');
        return back();
    }
}
