<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientRequest extends FormRequest
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
            'name' => 'required | min:3',
            'lastname' => 'required | min:3',
            'birthday' => 'required',
            'phone' => 'required | numeric | unique:users',
            'category_id' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'El nombre es requerido',
            'name.min' => 'El mínimo de caracteres en el nombre es de 5',
            'lastname.required' => 'El apellido es requerido',
            'lastname.min' => 'El mínimo de caracteres en el apellido es de 5',
            'birthday.required' => 'La fecha de cumpleaños es requerida',
            'phone.required' => 'El teléfono es requerido',
            'phone.numeric' => 'El teléfono debe se numérico',
            'phone.unique' => 'El teléfono ya esta registrado',
            'category_id.required' => 'El campo categoria es requerido',
        ];
    }
}
