<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\transactionDetail;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['transaction'] = \App\Models\Transaction::paginate(5);
        $data['judul'] = 'Data-Data Transaksi';
        return view('transaction_index', $data);

    }

    public function showDetail($transactions_id)
    {
        $transactionDetail = Transaction::where('transactions_id', $transactions_id)->first();
        return view('transactionDetail.index', compact('transactionDetail'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
