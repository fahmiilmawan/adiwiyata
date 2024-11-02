<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Peternakan extends Model
{
    protected $table = 'peternakans';
    protected $fillable = [
        'nama_hewan','jenis_hewan','deskripsi'
    ];

    public function user(): belongTo
    {
        return $this->belongsTo(User::class);
    }
}
