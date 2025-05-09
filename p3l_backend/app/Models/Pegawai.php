<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_pegawai';
    protected $guarded = [];

    public function jabatan()
    {
        return $this->belongsTo(Jabatan::class, 'jabatan_id', 'id_jabatan');
    }

    public function menjawabDiskusi()
    {
        return $this->hasMany(MenjawabDiskusi::class, 'pegawai_id', 'id_pegawai');
    }
}
