<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ConfigRequest extends FormRequest
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
            'title' => 'required|max:200',
            'content' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Nama Pengaturan harus di isi.',
            'title.unique' => 'Nama Pengaturan ini sudah digunakan.',
            'content.required' => 'Isi Pengaturan harus di isi.',
        ];
    }
}
