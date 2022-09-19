<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreGaleriRequest extends FormRequest
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
            'name' => 'required',
            'description' => 'required',
            'file' => 'required|file|image|max:2000',
        ];
    }

    public function messages()
    {
        return [
            'required' => 'Data :attribute harus diisi.',
            'file' => 'Data :attribute harus dimasukkan file gambar',
            'image' => 'Data :attribute harus dimasukkan file gambar',
            'max' => 'Ukuran :attribute melibihi ketentuan'
        ];
    }
}
