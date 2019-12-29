<?php

namespace App\Http\Controllers\Admin\Mahasiswa;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Mahasiswa\CreateRequest;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = Mahasiswa::all();

        return view('admin.mahasiswa.index')
            ->with('mahasiswa', $mahasiswa);
    }

    public function create()
    {
        return view('admin.mahasiswa.create');
    }

    public function show()
    {
        //
    }

    public function store(CreateRequest $request)
    {
        $data = $request->except('_token');
        $data['username'] = strtolower(str_replace(' ', '', $data['nama']));
        $data['password'] = \Hash::make($data['username']);
        $mahasiswa = Mahasiswa::create($data);
        session()->flash('status', [
            'success' => true,
            'message' => "Mahasiswa berhasil di tambahkan"
        ]);

        return redirect(route('admin.mahasiswa.index'));
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
