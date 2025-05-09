<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransaksiPenitipanBarang extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_transaksi_penitipan_barang';
    protected $guarded = [];
    protected $table = 'transaksi_penitipan_barangs';

    public function pembeli()
    {
        return $this->belongsTo(Pembeli::class, 'pembeli_id', 'id_pembeli');
    }

    public function detailTransaksiPenitipan()
    {
        return $this->hasMany(DetailTransaksiPenitipan::class, 'transaksi_penitipan_barang_id', 'id_transaksi_penitipan_barang');
    }
}
