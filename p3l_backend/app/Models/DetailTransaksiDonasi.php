<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailTransaksiDonasi extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_detail_transaksi_donasi';
    protected $guarded = [];
    protected $table = 'detail_transaksi_donasis';

    public function barang()
    {
        return $this->belongsTo(Barang::class, 'barang_id', 'id_barang');
    }

    public function transaksiPemberianDonasi()
    {
        return $this->belongsTo(TransaksiPemberianDonasi::class, 'transaksi_donasi_id', 'id_transaksi_donasi');
    }
}
