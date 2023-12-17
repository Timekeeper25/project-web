<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IncomesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['incomes'] = \App\Models\Incomes::paginate(5);
        $data['judul'] = 'Data-Data Keuntungan';
        return view('incomes_index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['incomes'] = new \App\Models\Incomes();
        $data['route'] = 'incomes.store';
        $data['method'] = 'post';
        $data['tombol'] = 'simpan';
        $data['judul'] = 'Tambah Data Keuntungan';

        return view('incomes_form', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validasiData = $request->validate([
            'kode_transaksi' => 'required|unique:incomes,kode_transaksi',
            'kode_pelanggan' => 'required|unique:incomes,kode_pelanggan',
            'kode_kasir' => 'required|unique:incomes,kode_kasir',
            'kode_barang' => 'required|unique:incomes,kode_barang',
            'jumlah_barang' => 'required',
            'total' => 'required',
            'modal' => 'required',
            'laba' => 'required',
            'nomor_hp' => 'required',
        ]);
        $incomes = new \App\Models\Incomes();
        $incomes -> fill($validasiData);
        $incomes -> save();

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
        $data['incomes'] = \App\Models\Incomes::findOrFail($id);
        return view('incomes_edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validasiData = $request->validate([
            'kode_transaksi' => 'required|unique:incomes,kode_transaksi',
            'kode_pelanggan' => 'required|unique:incomes,kode_pelanggan',
            'kode_kasir' => 'required|unique:incomes,kode_kasir',
            'kode_barang' => 'required|unique:incomes,kode_barang',
            'jumlah_barang' => 'required',
            'total' => 'required',
            'modal' => 'required',
            'laba' => 'required',
            'nomor_hp' => 'required',
        ]);
        $incomes = \App\Models\Incomes::findOrFail($id);
        $incomes -> fill($validasiData);
        $incomes -> save();

        flash('Data Berhasil Diubah');
        return redirect()->route('incomes.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $incomes = \App\Models\Incomes::findOrFail($id);
        $incomes->delete();
        flash('Data berhasil Dihapus');
        return back();
    }
}
