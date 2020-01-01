<?php

namespace App\Http\Controllers\Admin\Prodi;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Prodi\StoreRequest;
use App\Models\Prodi;

class ProdiController extends Controller
{
    public function index()
    {
        $prodi = Prodi::all();

        return view('admin.prodi.index')
            ->with('prodi', $prodi);
    }

    public function create()
    {
        return view('admin.prodi.create');
    }

    public function show()
    {
        //
    }

    public function store(StoreRequest $request)
    {
        $data = $request->except('_token');
        $prodi = Prodi::create($data);
        session()->flash('status', [
            'success' => true,
            'message' => "Prodi baru berhasil di tambahkan"
        ]);

        return redirect(route('admin.prodi.index'));
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
