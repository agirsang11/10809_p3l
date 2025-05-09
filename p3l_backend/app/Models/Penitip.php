<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penitip extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_penitip';
    protected $guarded = [];

    public function rewardPenitip()
    {
        return $this->hasMany(RewardPenitip::class, 'penitip_id', 'id_penitip');
    }

    public function transaksiPenitipanBarang()
    {
        return $this->hasMany(TransaksiPenitipanBarang::class, 'penitip_id', 'id_penitip');
    }
}
