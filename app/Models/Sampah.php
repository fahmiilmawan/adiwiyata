<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sampah extends Model
{
    protected $table = 'sampahs';
    protected $fillable =[
        'nama_sampah','kategori_sampah','kelas_id','deskripsi'
    ];

    public function kelas():belongsTo
    {
        return $this->belongsTo(Kelas::class);
    }
}
