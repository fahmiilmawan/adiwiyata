<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LaporanPengeluaran extends Model
{
    protected $table= 'laporan_pengeluaran';
    protected $fillable = ['jenis_pengeluaran','deskripsi','jumlah','harga','total'];
}
