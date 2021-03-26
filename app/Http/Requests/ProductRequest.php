<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'name' => 'required | min:5',
            'price' => 'required | numeric',
            'point' => 'required | numeric',
            'point_changed' => 'required | numeric',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'El nombre es requerido',
            'name.min' => 'El mínimo de caracteres en el nombre es de 5',
            'price.required' => 'El precio es requerido',
            'price.numeric' => 'El precio debe ser un número',
            'point.required' => 'Los puntos son requerido',
            'point.numeric' => 'Los puntos deben ser numéricos',
            'point_changed.required' => 'Los puntos para canjear son requerido',
            'point_changed.numeric' => 'Los puntos para canjear deben ser numéricos',
        ];
    }
}
