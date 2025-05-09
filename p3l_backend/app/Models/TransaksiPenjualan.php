<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransaksiPenjualan extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_transaksi_penjualan';
    protected $guarded = [];
    protected $table = 'transaksi_penjualans';

    public function pembeli()
    {
        return $this->belongsTo(Pembeli::class, 'pembeli_id', 'id_pembeli');
    }

    public function detailTransaksiPenjualan()
    {
        return $this->hasMany(DetailTransaksiPenjualan::class, 'transaksi_penjualan_id', 'id_transaksi_penjualan');
    }
}
