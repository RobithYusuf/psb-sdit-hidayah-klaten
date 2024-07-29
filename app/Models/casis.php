<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class casis extends Model
{
    use HasFactory;

    protected $table = 'tb_casis';
    protected $fillable = ['id_casis', 'user_id', 'nama', 'nik', 'tempat_lahir','tanggal_lahir','alamat',
                            'jenis_kelamin','jml_saudara','nama_ortu','tempat_lahir_ortu','tanggal_lahir_ortu',
                            'no_hp','pendidikan_ortu','gaji_ortu','pekerjaan_ortu'];
    protected $primaryKey = 'id_casis'; 

    public function pembayaran()
    {
        return $this->hasOne(Pembayaran::class, 'casis_id', 'id_casis');
    }

    public function pendaftaran()
    {
        return $this->hasOne(pendaftaran::class, 'casis_id', 'id_casis');
    }

    public function seleksi()
    {
        return $this->hasMany(selekasi::class, 'casis_id', 'id_casis');
    }

    // Relasi dengan model User
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
