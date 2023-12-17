<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CashierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['cashier'] = \App\Models\Cashier::paginate(5);
        $data['judul'] = 'Data-Data Kasir';
        return view('cashier_index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['cashier'] = new \App\Models\Cashier();
        $data['route'] = 'cashier.store';
        $data['method'] = 'post';
        $data['tombol'] = 'simpan';
        $data['judul'] = 'Tambah Data Kasir';

        return view('cashier_form', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validasiData = $request -> validate([
            'kode_kasir' => 'required|unique:cashiers,kode_kasir',
            'nama_kasir' => 'required',
            'jenis_kelamin' => 'required',
            'nomor_hp' => 'required',
        ]);
        $stock = new \App\Models\Cashier();
        $stock -> fill($validasiData);
        $stock -> save();

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
        $data['cashier'] = \App\Models\Cashier::findOrFail($id);
        return view('cashier_edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validasiData = $request -> validate([
            'kode_kasir' => 'required|unique:cashiers,kode_kasir',
            'nama_kasir' => 'required',
            'jenis_kelamin' => 'required',
            'nomor_hp' => 'required',
        ]);
        $cashier = \App\Models\Cashier::findOrFail($id);
        $cashier -> fill($validasiData);
        $cashier -> save();

        flash('Data Berhasil Diubah');
        return redirect()->route('cashier.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cashier = \App\Models\Stock::findOrFail($id);
        $cashier->delete();
        flash('Data berhasil Dihapus');
        return back();
    }
}
