<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Taman extends Model
{
    protected $table = 'taman';
    protected $fillable = [
        'nama_taman','lokasi','deskripsi'
    ];
}
