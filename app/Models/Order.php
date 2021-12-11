<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;


    protected $fillable = [
        'nama_pembeli', 'email_pembeli', 'no_hp_pembeli', 'nama_produk', 'jumlah_produk', 'alamat_pembeli', 'keterangan_pembeli',
    ];

}
