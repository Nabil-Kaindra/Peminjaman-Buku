<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    protected $table='bukus';
    protected $fillable = [
        'nama_peminjam',
        'nama_buku',
        'jumlah_buku',
        'tanggal_pinjam',
        'tanggal_kembali',
        'denda'  
    ];
}
