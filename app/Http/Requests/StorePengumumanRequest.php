<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePengumumanRequest extends FormRequest
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
            'judul' => 'required|not_regex:/,-.@$#%^&*!()',
            'konten' => 'required',
            'cover_img' => 'file|image|max:2000',
            'tag' => 'required',
            'kategori' => 'required',
            'no_regex' => 'Data :attribute tidak boleh mengandung karakter symbol'
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
