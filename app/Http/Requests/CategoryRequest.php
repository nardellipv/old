<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
            'point' => 'required | numeric',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'El nombre es requerido',
            'point.required' => 'Los puntos son requerido',
            'point.numeric' => 'Los puntos deben ser números',
        ];
    }
}
