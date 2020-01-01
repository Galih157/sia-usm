<?php

namespace App\Http\Controllers\Admin\Dosen;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Dosen\StoreRequest;
use App\Models\Dosen;

class DosenController extends Controller
{
    public function index()
    {
        $semua_dosen = Dosen::all();

        return view('admin.dosen.index')
            ->with('semua_dosen', $semua_dosen);
    }

    public function create()
    {
        return view('admin.dosen.create');
    }

    public function show()
    {
        //
    }

    public function store(StoreRequest $request)
    {
        $data = $request->except('_token');
        $data['username'] = substr(strtolower((explode(' ', $data['nama']))[0]), 0, 8) . mt_rand(1000, 9999);
        $data['password'] = \Hash::make($data['password']);
        $dosen = Dosen::create($data);
        session()->flash('status', [
            'success' => true,
            'message' => "Dosen baru berhasil di tambahkan"
        ]);

        return redirect(route('admin.dosen.index'));
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
