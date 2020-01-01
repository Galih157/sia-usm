<?php

namespace App\Http\Controllers\Admin\Makul;

use App\Http\Controllers\Controller;
use App\Models\Makul;
use App\Http\Requests\Admin\Makul\StoreRequest;

class MakulController extends Controller
{
    public function index()
    {
        $makul = Makul::all();

        return view('admin.makul.index')
            ->with('makul', $makul);
    }

    public function create()
    {
        return view('admin.makul.create');
    }

    public function show()
    {
        //
    }

    public function store(StoreRequest $request)
    {
        $data = $request->except('_token');
        $makul = Makul::create($data);
        session()->flash('status', [
            'success' => true,
            'message' => "Makul baru berhasil di tambahkan"
        ]);

        return redirect(route('admin.makul.index'));
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
