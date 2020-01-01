<?php

namespace App\Models;

use App\Helpers\HariHelper;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $table = 'kelas_dosen';
    protected $fillable = ['hari', 'waktu', 'id_prodi', 'id_dosen', 'id_makul'];


    public function getHariAttribute($value)
    {
        return HariHelper::getNamaHari($value);
    }

    public function prodi()
    {
        return $this->belongsTo('App\Models\Prodi', 'id_prodi', 'id');
    }

    public function dosen()
    {
        return $this->belongsTo('App\Models\Dosen', 'id_dosen', 'id');
    }

    public function makul()
    {
        return $this->belongsTo('App\Models\Makul', 'id_makul', 'id');
    }
}
