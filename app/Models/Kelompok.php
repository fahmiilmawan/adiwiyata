<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Kelompok extends Model
{
    protected $table = 'kelompoks';
    protected $fillable = [
        'nama_kelompok','deskripsi'
    ];

    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
