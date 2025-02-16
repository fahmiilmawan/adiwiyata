<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KasKelas extends Model
{
    protected $fillable = [
        'kelas_id',
        'saldo',
        'transaction_id'
    ];

    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }
}
