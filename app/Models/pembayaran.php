<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pembayaran extends Model
{
    use HasFactory;

    protected $table = 'tb_pembayaran';
    protected $fillable = ['id_pembayaran', 'casis_id', 'jumlah_pembayaran', 'status_pembayaran', 'bukti_pembayaran','tgl_pembayaran'];
    protected $primaryKey = 'id_pembayaran'; 

    public function casis()
    {
        return $this->belongsTo(Casis::class, 'casis_id', 'id_casis');
    }
}
