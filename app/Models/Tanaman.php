<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Tanaman extends Model
{
    protected $table = 'tanaman';
    protected $fillable = [
        'taman_id','nama_tanaman','nama_latin','kategori_tanaman','deskripsi','gambar'
    ];

    public function taman(): BelongsTo
    {
        return $this->belongsTo(Taman::class);
    }

}
