<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransaksiPemberianDonasi extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_transaksi_pemberian_donasi';
    protected $guarded = [];
    protected $table = 'transaksi_pemberian_donasis';

    public function requestDonasi()
    {
        return $this->belongsTo(RequestDonasi::class, 'request_donasi_id', 'id_request_donasi');
    }
}
