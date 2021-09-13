<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductoRequest extends FormRequest
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
            'nombre' => 'required|string|max:255',
            'talla' => 'required|string|max:1',
            'observaciones' => 'required|string|max:255',
            'marca_id' => 'required|integer|exists:marcas,id',
            'cantidad' => 'required|integer',
            'fecha_embarque' => 'required|date',
        ];
    }
    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'required' => 'El campo :attribute es requerido.',
            'max' => 'La longitud de :attribute excede el limite permitido.',
            'exists' => 'La :attribute no existe en la tabla Marcas.',
            'date' => 'La fecha no es válida.',
        ];
    }
}
