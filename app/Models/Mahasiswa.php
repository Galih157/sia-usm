<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswa';
    protected $fillable = [
        'nim', 'nama', 'email', 'jenis_kelamin', 'username', 'password', 'id_prodi'
    ];

    public function prodi()
    {
        return $this->belongsTo('App\Models\Prodi', 'id_prodi', 'id');
    }
}