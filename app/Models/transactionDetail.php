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

    public function setHargaAttribute($value)
    {
        // Accessing the related Stock model and getting harga_barang
        $harga_barang = $this->stock->harga_barang;

        // Setting the value of the harga column in the transactionDetail_form
        $this->attributes['harga'] = $harga_barang;
    }

}
