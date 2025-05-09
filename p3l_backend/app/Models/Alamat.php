<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alamat extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_alamat';
    protected $guarded = [];

    public function pembeli()
    {
        return $this->hasMany(Pembeli::class, 'pembeli_id', 'id_pembeli');
    }
}
