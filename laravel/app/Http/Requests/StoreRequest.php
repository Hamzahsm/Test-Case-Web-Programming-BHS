<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //
            'foto_profile' => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'nama' => 'required|min:3|max:255',
            'role' => 'required|min:3|max:255',
            'email' => 'required|min:3|max:255',
            'alamat' => 'required|min:3|max:255',
            'pendidikan' => 'required|min:3|max:1500',
            'training' => 'required|min:3|max:1500',
            'skill' => 'required|min:3|max:1500',
            'pengalaman_kerja' => 'required|min:3|max:1500'
        ];
    }
}
