<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use Illuminate\Http\Request;

class StockController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['stock'] = \App\Models\Stock::paginate(5);
        $data['judul'] = 'Data-Data Barang';
        return view('stock_index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['stock'] = new \App\Models\Stock();
        $data['route'] = 'stock.store';
        $data['method'] = 'post';
        $data['tombol'] = 'simpan';
        $data['judul'] = 'Tambah Stok Barang';

        return view('stock_form', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validasiData = $request->validate([
            'kode_barang' => 'required|unique:stocks,kode_barang',
            'nama_barang' => 'required',
            'gambar_barang' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', 
            'stok_barang' => 'required',
            'harga_barang' => 'required',
            'modal_barang' => 'required',
        ]);

        if ($request->hasFile('gambar_barang')) {
            $file = $request->file('gambar_barang');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('images'), $fileName);
            $validasiData['gambar_barang'] = $fileName;
        }

        $stock = new \App\Models\Stock();
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
        $data['stock'] = \App\Models\Stock::findOrFail($id);
        return view('stock_edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validasiData = $request->validate([
            'kode_barang' => 'required|unique:stocks,kode_barang,' . $id,
            'nama_barang' => 'required',
            'gambar_barang' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', 
            'stok_barang' => 'required',
            'harga_barang' => 'required',
            'modal_barang' => 'required',
        ]);

        if ($request->hasFile('gambar_barang')) {
            $file = $request->file('gambar_barang');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('images'), $fileName);
            $validasiData['gambar_barang'] = $fileName;
        }

        $stock = \App\Models\Stock::findOrFail($id);
        $stock -> fill($validasiData);
        $stock -> save();

        flash('Data Berhasil Diubah');
        return redirect()->route('stock.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $stock = \App\Models\Stock::findOrFail($id);
        $stock->delete();
        flash('Data berhasil Dihapus');
        return back();
    }
}
