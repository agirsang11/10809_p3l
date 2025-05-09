<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_barang';
    protected $guarded = [];

    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class, 'pegawai_id', 'id_pegawai');
    }

    public function kategoriBarang()
    {
        return $this->belongsTo(KategoriBarang::class, 'kategori_barang_id', 'id_kategori_barang');
    }

    public function detailTransaksiPenjualan()
    {
        return $this->hasMany(DetailTransaksiPenjualan::class, 'barang_id', 'id_barang');
    }

    public function detailTransaksiPenitipan()
    {
        return $this->hasMany(DetailTransaksiPenitipan::class, 'barang_id', 'id_barang');
    }
}
