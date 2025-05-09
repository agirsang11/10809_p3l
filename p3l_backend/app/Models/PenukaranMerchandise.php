<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenukaranMerchandise extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_penukaran_merchandise';
    protected $guarded = [];
    protected $table = 'penukaran_merchandises';

    public function merchandise()
    {
        return $this->belongsTo(Merchandise::class, 'merchandise_id', 'id_merchandise');
    }

    public function pembeli()
    {
        return $this->belongsTo(Pembeli::class, 'pembeli_id', 'id_pembeli');
    }
}
