<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class detalleFacturasRequest extends FormRequest
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
            'cantidad'=>'required',
            'preciounitario'=> 'required|min:3|max:255',
            'totalinea'=> 'required|min:3|max:255',
            'idfactura'=>'required',
            'idproducto'=> 'required',
        ];
    }
}
