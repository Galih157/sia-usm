<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Mahasiswa extends Authenticatable
{
    protected $table = 'mahasiswa';
    public $primaryKey = 'nim';
    public $increments = false;
    protected $fillable = [
        'nim', 'nama', 'email', 'jenis_kelamin', 'username', 'password', 'id_prodi'
    ];

    public function prodi()
    {
        return $this->belongsTo('App\Models\Prodi', 'id_prodi', 'id');
    }
}
