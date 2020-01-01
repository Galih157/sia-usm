<?php

namespace App\Http\Requests\Admin\Makul;

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
            'sks' => 'required|numeric',
            'kode' => 'required|unique:makul',
            'nama' => 'required'
        ];
    }
}
