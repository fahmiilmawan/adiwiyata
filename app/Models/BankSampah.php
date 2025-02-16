<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BankSampah extends Model
{
    protected $fillable = [
        'user_id','jenis_sampah_id','kelas_id','jumlah','harga','total_harga','transaction_id'
    ];


    public function kelas(): BelongsTo
    {
        return $this->belongsTo(Kelas::class);
    }
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function jenis_sampah()
    {
        return $this->belongsTo(JenisSampah::class);
    }
    public function kasKelas()
    {
        return $this->belongsTo(KasKelas::class);
    }
}
