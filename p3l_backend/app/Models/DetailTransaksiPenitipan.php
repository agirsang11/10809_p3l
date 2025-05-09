<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailTransaksiPenitipan extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_detail_transaksi_penitipan';
    protected $guarded = [];
    protected $table = 'detail_transaksi_penitipans';

    public function barang()
    {
        return $this->belongsTo(Barang::class, 'barang_id', 'id_barang');
    }

    public function transaksiPenitipanBarang()
    {
        return $this->belongsTo(TransaksiPenitipanBarang::class, 'transaksi_penitipan_barang_id', 'id_transaksi_penitipan_barang');
    }
}
