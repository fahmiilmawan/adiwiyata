<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Ruangan extends Model
{
    protected $table = 'ruangans';
    protected $fillable = [
        'nama_ruangan','deskripsi'
    ];

    public function asset(): HasMany
    {
        return $this->hasMany(Asset::class);
    }
}
