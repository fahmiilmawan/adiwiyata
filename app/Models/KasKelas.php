<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class KasKelas extends Model
{
    protected $fillable = [
        'kelas_id',
        'saldo',
        'transaction_id'
    ];

    public function tarikSaldo(): HasMany
    {
        return $this->hasMany(TarikSaldo::class);
    }

    public function kelas(): BelongsTo
    {
        return $this->belongsTo(Kelas::class);
    }
}
