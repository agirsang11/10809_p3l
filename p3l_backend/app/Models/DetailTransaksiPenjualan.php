<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailTransaksiPenjualan extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_detail_transaksi_penjualan';
    protected $guarded = [];
    protected $table = 'detail_transaksi_penjualans';

    public function barang()
    {
        return $this->belongsTo(Barang::class, 'barang_id', 'id_barang');
    }

    public function transaksiPenjualan()
    {
        return $this->belongsTo(TransaksiPenjualan::class, 'transaksi_penjualan_id', 'id_transaksi_penjualan');
    }
}
