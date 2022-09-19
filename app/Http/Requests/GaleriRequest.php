<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GaleriRequest extends FormRequest
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
            'file' => 'required|max:200',
            'name' => 'required',
            'description' => 'required'
        ];
    }

    
    public function messages()
    {
        return [
            'name.required' => 'Nama Kategori harus di isi.',
            'name.unique' => 'Nama Kategori ini sudah digunakan.',
            'type.required' => 'Jenis Kategori harus di isi.',
        ];
    }
}
