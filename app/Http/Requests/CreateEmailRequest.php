<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateEmailRequest extends FormRequest
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
            'cContNombre' => 'required',
            'cContEmail' => 'required',
            'cContAsunto' => 'required',
            'cContMensaje' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'cContNombre.required' => 'Un nombre es requerido',
            'cContrEmail.required' => 'Ingrese el email',
            'cContAsunto.required' => 'Ingrese el asunto',
            'cContMensaje.required' => 'Escriba un mensaje', 
        ];
    }
}
