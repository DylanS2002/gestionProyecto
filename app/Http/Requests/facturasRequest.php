<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class facturasRequest extends FormRequest
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
            'fecha'=>'required|min:3|max:1000',
            'Subtotal'=> 'required',
            'impuestos'=> 'required',
            'total' => 'required',
            'idcliente'=> 'required',
            'idestado'=> 'required',
            'idpago'=> 'required',  
        ];
    }
}
