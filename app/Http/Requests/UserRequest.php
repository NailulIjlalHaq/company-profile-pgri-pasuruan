<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'nama' => 'required',
            'username' => 'required|unique:users,username,except,id',
            'email' => 'required|email|unique:users,email,except,id',
            'password' => 'required|min:6',
            'tipe' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'required' => ':attribute harus di isi.',
            'unique' => ':attribute ini sudah terdapat dalam sistem.',
            'min' => ':attribute jumlah minimal :size karakter',
            'email' => ':attribute tidak sesuai format'
        ];
    }
}
