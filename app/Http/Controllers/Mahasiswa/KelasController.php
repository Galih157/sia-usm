<?php

namespace App\Http\Controllers\Mahasiswa;

use App\Http\Controllers\Controller;
use App\Models\Kelas;
use App\Models\KelasMahasiswa;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function index()
    {
        $mahasiswa = auth('mahasiswa')->user();

        $semuaKelas = KelasMahasiswa::with([
            'kelas.makul',
            'kelas.prodi',
            'kelas.dosen'
        ])->whereNim($mahasiswa->nim)->get();

        return view('mahasiswa.kelas.index')
            ->with('semuaKelas', $semuaKelas);
    }

    public function create()
    {
        $mahasiswa = auth('mahasiswa')->user();

        $semuaKelasDosen = Kelas::with(['prodi', 'dosen', 'makul'])->where([
            'id_prodi' => $mahasiswa->id_prodi
        ])->get();

        return view('mahasiswa.kelas.create')
            ->with('semuaKelasDosen', $semuaKelasDosen);
    }

    public function show()
    {
        //
    }

    public function store()
    {
        $mahasiswa = auth('mahasiswa')->user();
        $data = request()->except('_token');
        $data['nim'] = $mahasiswa->nim;

        KelasMahasiswa::create($data);

        session()->flash('status', [
            'success' => true,
            'message' => "Kelas berhasil di tambahkan"
        ]);

        return redirect(route('mahasiswa.kelas.index'));
    }

    public function update()
    {
        //
    }

    public function destroy()
    {
        //
    }
}
