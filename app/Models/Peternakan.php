<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Peternakan extends Model
{
    protected $table = 'peternakans';
    protected $fillable = [
        'nama_hewan','jenis_hewan','deskripsi'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
