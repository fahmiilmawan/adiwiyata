<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class KasKelas extends Model
{
    protected $fillable=[
'kelas_id',
'penarikan',
'saldo'
    ];
    public function kelas(): BelongsTo
    {
        return $this->belongsTo(Kelas::class);
    }
}
