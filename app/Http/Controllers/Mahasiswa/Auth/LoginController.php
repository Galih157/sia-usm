<?php

namespace App\Http\Controllers\Mahasiswa\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware(['guest:mahasiswa']);
    }

    public function index()
    {
        return view('mahasiswa.auth.login');
    }

    public function submitLogin()
    {
        $credentials = request()->only(['nim', 'password']);
        $attempt = auth('mahasiswa')->attempt($credentials);

        if (!$attempt) return redirect()->back()->withErrors(['message' => "NIM atau Password salah, silahkan coba lagi."]);

        return redirect(route('mahasiswa.dashboard'));
    }
}
