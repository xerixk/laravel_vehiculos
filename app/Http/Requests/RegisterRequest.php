<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules;

class RegisterRequest extends FormRequest
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
            'name' => 'required|string|min:3|max:255',
            'email' => 'required|string|lowercase|email|max:255|unique:'.User::class,
            'password' => 'required|confirmed'. Rules\Password::defaults(),
            'lastname' => 'required|string|max:250',
            'direccion' =>'required|string|max:250',
            'ciudad' => 'required|string|max:250',
            'pais' => 'required|string|max:250',
            'telefono' => 'required|numeric|digits_between:10,15',
            'codigoPostal' => 'required|numeric|max:10',
            'nacimiento' => 'required|date|before:-18 years',
            'genero' => 'required', Rule::in(['masculino', 'femenino']),
            //
        ];
    }
    public function messages(){
        return [
            'name.required'=> "El campo nombre no se ha completado",
            'name.min'=> "El campo nombre debe tener al menos 3 caracteres",
            'password.confirmed'=>"Las dos contraseñas no coinciden"
        ];
    }
}