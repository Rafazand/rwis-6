<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kk extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_kk';
    protected $fillable = [
        'no_kk', 
        'alamat', 
        'nik_kepala_keluarga', 
        'jumlah_usia_produktif', 
        'jumlah_anggota_kk', 
        'jumlah_usia_lanjut', 
    ];
    public function wargas()
    {
        return $this->hasMany(Warga::class, 'no_kk', 'no_kk');
    }
}
