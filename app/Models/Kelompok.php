<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kelompok extends Model
{
    protected $table = 'kelompoks';
    protected $fillable = [
        'nama_kelompok','deskripsi'
    ];

    public function user():belongsTo
    {
        return $this->belongsTo(User::class);
    }
}
