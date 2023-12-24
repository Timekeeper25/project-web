<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transactionDetail extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function stock()
    {
        return $this->belongsTo(\App\Models\Stock::class, 'kode_barang');
    }

    public function transaction()
    {
    return $this->belongsTo(Transaction::class, 'transactions_id');
    }   
}
