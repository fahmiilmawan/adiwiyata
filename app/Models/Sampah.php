<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Sampah extends Model
{
    protected $table = 'sampahs';
    protected $fillable =[
        'nama_sampah','kategori_sampah','kelas_id','deskripsi'
    ];

    public function kelas():BelongsTo
    {
        return $this->belongsTo(Kelas::class);
    }
}
