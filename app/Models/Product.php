<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
  
    protected $fillable = [
        'nama_produk', 'harga_produk', 'jumlah_produk', 'kategory_produk', 'keterangan_produk', 'gambar_produk', 'status_produk',
    ];
}
