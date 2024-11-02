<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    protected $table = 'assets';
    protected $fillable = [
        'kelompok_id','nama_asset','kategori_asset','ruangan_id','deskripsi'
    ];

    public function ruangan(): belongsTo
    {
        return $this->belongsTo(Ruangan::class);
    }
    public function kelompok(): hasMany
    {
        return $this->hasMany(Kelompok::class);
    }
}
