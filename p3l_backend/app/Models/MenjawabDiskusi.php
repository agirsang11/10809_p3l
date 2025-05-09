<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenjawabDiskusi extends Model
{
    use HasFactory;
    protected $table = 'menjawab_diskusis';
    protected $primaryKey = 'id_menjawab_diskusi';
    protected $guarded = [];

    public function diskusi()
    {
        return $this->belongsTo(Diskusi::class, 'diskusi_id', 'id_diskusi');
    }

    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class, 'pegawai_id', 'id_pegawai');
    }
}
