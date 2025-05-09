<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriBarang extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_kategori_barang';
    protected $guarded = [];
    protected $table = 'kategori_barangs';

    public function barang()
    {
        return $this->hasMany(Barang::class, 'kategori_barang_id', 'id_kategori_barang');
    }
}
