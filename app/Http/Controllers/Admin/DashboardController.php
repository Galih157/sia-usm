<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Dosen;
use App\Models\Mahasiswa;
use App\Models\Prodi;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = collect([
            'dosen' => Dosen::count('id'),
            'mahasiswa' => Mahasiswa::count('nim'),
            'prodi' => Prodi::count('id'),
        ]);

        return view('admin.dashboard.index')
            ->with('stats', $stats);
    }
}
