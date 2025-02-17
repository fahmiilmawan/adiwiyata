<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TarikSaldo extends Model
{
    protected $fillable = [
        'kas_kelas_id',
        'debit',
        'transaction_id',
    ];

    public function kasKelas(): BelongsTo
    {
        return $this->belongsTo(KasKelas::class);
    }
}
