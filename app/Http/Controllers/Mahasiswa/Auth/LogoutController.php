<?php

namespace App\Http\Controllers\Mahasiswa\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function logout()
    {
        auth('mahasiswa')->logout();

        return redirect(route('mahasiswa.auth.login'));
    }
}
