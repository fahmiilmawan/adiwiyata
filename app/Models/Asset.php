<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Asset extends Model
{
    protected $table = 'assets';
    protected $fillable = [
        'kelompok_id','nama_asset','kategori_asset','ruangan_id','deskripsi'
    ];

    public function ruangan(): BelongsTo
    {
        return $this->belongsTo(Ruangan::class);
    }
    public function kelompok(): belongsTo
    {
        return $this->belongsTo(Kelompok::class);
    }
}
