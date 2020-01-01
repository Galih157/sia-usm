<?php

namespace App\Http\Requests\Admin\Dosen;

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
            'nis' => 'required|numeric|digits:8',
            'nama' => 'required',
            'password' => 'required|confirmed',
            'jenis_kelamin' => 'required|in:L,P'
        ];
    }
}
