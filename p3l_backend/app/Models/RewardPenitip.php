<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RewardPenitip extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_reward_penitip';
    protected $guarded = [];
    protected $table = 'reward_penitips';

    public function penitip()
    {
        return $this->belongsTo(Penitip::class, 'penitip_id', 'id_penitip');
    }
}
