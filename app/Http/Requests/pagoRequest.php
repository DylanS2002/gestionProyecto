<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class pagoRequest extends FormRequest
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
            'nombre'=> 'required|min:3|max:225',
            'descripcion'=> 'required|max:1000',
            'activo'=> 'required',
        ];
    }
}
