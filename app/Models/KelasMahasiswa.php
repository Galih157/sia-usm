<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KelasMahasiswa extends Model
{
    protected $table = 'jadwal_mahasiswa';
    protected $fillable = ['id', 'nim', 'id_kelas_dosen'];

    public function kelas()
    {
        return $this->hasOne('App\Models\Kelas', 'id', 'id_kelas_dosen');
    }
}
