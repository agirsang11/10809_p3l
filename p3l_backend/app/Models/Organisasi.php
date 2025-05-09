<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organisasi extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_organisasi';
    protected $guarded = [];

    public function requestDonasi()
    {
        return $this->hasMany(RequestDonasi::class, 'organisasi_id', 'id_organisasi');
    }
}
