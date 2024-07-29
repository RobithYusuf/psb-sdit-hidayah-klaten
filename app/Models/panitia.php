<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class panitia extends Model
{
    use HasFactory;
    protected $table = 'tb_panitia';
    protected $fillable = ['id_panitia', 'user_id', 'nama', 'status','jenis_kelamin'];
    protected $primaryKey = 'id_panitia';

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
