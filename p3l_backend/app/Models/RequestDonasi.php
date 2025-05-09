<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestDonasi extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_request_donasi';
    protected $guarded = [];
    protected $table = 'request_donasis';

    public function organisasi()
    {
        return $this->belongsTo(Organisasi::class, 'organisasi_id', 'id_organisasi');
    }
}
