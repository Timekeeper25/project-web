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
        $data['judul'] = 'Data Keuntungan';

        return view('incomes_form', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

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
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
    }
}
