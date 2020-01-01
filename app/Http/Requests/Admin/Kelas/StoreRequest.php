<?php

namespace App\Http\Requests\Admin\Kelas;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'id_prodi' => 'required',
            'id_makul' => 'required',
            'id_dosen' => 'required',
            'waktu' => 'required',
            'hari' => 'required|numeric',
        ];
    }
}
