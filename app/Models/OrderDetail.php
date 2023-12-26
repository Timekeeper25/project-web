<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;
    
    protected $fillable = ['order_id', 'nama', 'alamat', 'id_user', 'nama_barang', 'jumlah', 'harga', 'gambar'];
    public function order()
    {
        return $this->belongsTo(Order::class, 'order_id');
    }
}
