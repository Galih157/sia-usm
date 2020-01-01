<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    protected $table = 'dosen';
    protected $fillable = ['nis', 'nama', 'email', 'password', 'username', 'jenis_kelamin'];
}
