<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ruangan extends Model
{
    protected $table = 'ruangans';
    protected $fillable = [
        'nama_ruangan','deskripsi'
    ];

    public function asset(): hasMany
    {
        return $this->hasMany(Asset::class);
    }
}
