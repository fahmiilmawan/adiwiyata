<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pemasukan extends Model
{
    protected $fillable = [
        'jenis_pemasukan',
        'deskripsi',
        'jumlah',
        'harga',
        'total',
        'transaction_id'
    ];

    public function saldo()
    {
        return $this->belongsTo(Saldo::class);
    }
}
