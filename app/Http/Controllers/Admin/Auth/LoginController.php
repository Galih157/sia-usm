<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware(['guest:admin']);
    }

    public function index()
    {
        return view('admin.auth.login');
    }

    public function submitLogin()
    {
        $credentials = request()->only(['username', 'password']);
        $attempt = auth('admin')->attempt($credentials);

        if (!$attempt) return redirect()->back();

        return redirect(route('admin.dashboard'));
    }
}
