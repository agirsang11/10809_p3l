<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembeli extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_pembeli';
    protected $guarded = [];

    public function Alamat()
    {
        return $this->hasMany(Alamat::class, 'pembeli_id', 'id_pembeli');
    }

    public function penukaranMerchandise()
    {
        return $this->hasMany(PenukaranMerchandise::class, 'pembeli_id', 'id_pembeli');
    }

    public function transaksiPenjualan()
    {
        return $this->hasMany(TransaksiPenjualan::class, 'pembeli_id', 'id_pembeli');
    }
}
