<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['customer'] = \App\Models\Customer::paginate(5);
        $data['judul'] = 'Data-Data Pelanggan';
        return view('customer_index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['customer'] = new \App\Models\Customer();
        $data['route'] = 'customer.store';
        $data['method'] = 'post';
        $data['tombol'] = 'simpan';
        $data['judul'] = 'Tambah Data Pelanggan';

        return view('customer_form', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validasiData = $request->validate([
            'kode_pelanggan' => 'required|unique:customers,kode_pelanggan',
            'nama_pelanggan' => 'required',
            'alamat_pelanggan' => 'required',
            'nomor_hp' => 'required',
        ]);
        $customers = new \App\Models\Customer();
        $customers -> fill($validasiData);
        $customers -> save();

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
        $data['customer'] = \App\Models\Customer::findOrFail($id);
        return view('customer_edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validasiData = $request->validate([
            'kode_pelanggan' => 'required|unique:customers,kode_pelanggan',
            'nama_pelanggan' => 'required',
            'alamat_pelanggan' => 'required',
            'nomor_hp' => 'required',
        ]);
        $customer = \App\Models\Customer::findOrFail($id);
        $customer -> fill($validasiData);
        $customer -> save();

        flash('Data Berhasil Diubah');
        return redirect()->route('customer.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $customer = \App\Models\Customer::findOrFail($id);
        $customer->delete();
        flash('Data berhasil Dihapus');
        return back();
    }
}
