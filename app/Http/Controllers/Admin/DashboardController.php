<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Dosen;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = collect([
            'dosen' => Dosen::count('id'),
            'mahasiswa' => 0,
            'prodi' => 0,
        ]);

        return view('admin.dashboard.index')
            ->with('stats', $stats);
    }
}
