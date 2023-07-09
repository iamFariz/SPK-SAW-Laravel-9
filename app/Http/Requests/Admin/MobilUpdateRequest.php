<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class MobilUpdateRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
                'nopol'=> 'required',
                'nama'=> 'required',
                'slug'=>'required',
                'harga'=>'required',
                'tahun'=>'required',
                'merek'=>'required',
                'kilometer'=>'required',
                'bahan_bakar'=>'required',
                'kapasitas_mesin'=>'required',
                'tipe_mobil'=>'required',
                'jml_kursi'=>'required',
                'transmisi'=>'required',
                'warna'=>'required',
                'pemilik'=>'required',
                'alamat_pemilik'=>'required',
                'deskripsi'=>'required',
                'ketersediaan'=>'required',
        ];
    }
}
