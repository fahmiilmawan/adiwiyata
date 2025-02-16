<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Kelas extends Model
{
    protected $table = 'kelas';
    protected $fillable = [
        'nama_kelas','deskripsi'
    ];

    public function bankSampah(): HasMany
    {
        return $this->hasMany(bankSampah::class);
    }

    public function kasKelas(): BelongsTo
    {
        return $this->belongsTo(KasKelas::class);
    }
}
