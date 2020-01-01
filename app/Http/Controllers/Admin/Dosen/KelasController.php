<?php

namespace App\Http\Controllers\Admin\Dosen;

use App\Helpers\HariHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Kelas\StoreRequest;
use App\Models\Dosen;
use App\Models\Kelas;
use App\Models\Makul;
use App\Models\Prodi;

class KelasController extends Controller
{
    public function index()
    {
        $semua_kelas = Kelas::with(['prodi', 'makul', 'dosen'])->get();

        return view('admin.kelas.index')
            ->with('semua_kelas', $semua_kelas);
    }

    public function create()
    {
        $semua_prodi = Prodi::all(['id', 'nama']);
        $semua_dosen = Dosen::all(['id', 'nama']);
        $semua_makul = Makul::all(['id', 'kode', 'nama']);

        return view('admin.kelas.create')
            ->with('semua_prodi', $semua_prodi)
            ->with('semua_dosen', $semua_dosen)
            ->with('semua_makul', $semua_makul);
    }

    public function show()
    {
        //
    }

    public function store(StoreRequest $request)
    {
        $data = $request->except('_token');
        Kelas::create($data);

        return redirect(route('admin.kelas.index'));
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
