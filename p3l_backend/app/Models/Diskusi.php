<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diskusi extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_diskusi';
    protected $guarded = [];

    public function barang()
    {
        return $this->belongsTo(Barang::class, 'barang_id', 'id_barang');
    }

    public function pembeli()
    {
        return $this->belongsTo(Pembeli::class, 'pembeli_id', 'id_pembeli');
    }

    public function menjawabDiskusi()
    {
        return $this->belongsTo(MenjawabDiskusi::class, 'diskusi_id', 'id_diskusi');
    }
}
