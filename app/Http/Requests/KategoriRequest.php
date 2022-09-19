<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KategoriRequest extends FormRequest
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
            'kategori' => 'required|max:200|unique:categories,name'
        ];
    }

    public function messages()
    {
        return [
            'required' => ':attribute harus di isi.',
            'unique' => 'Nama :attribute ini sudah terdapat dalam sistem.',
            'max' => ':attribute jumlah maksimal :size'
        ];
    }
}
