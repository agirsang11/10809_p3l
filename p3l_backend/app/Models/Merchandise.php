<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Merchandise extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_merchandise';
    protected $guarded = [];

    public function penukaranMerchandise()
    {
        return $this->hasMany(PenukaranMerchandise::class, 'merchandise_id', 'id_merchandise');
    }
}
