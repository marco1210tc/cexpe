<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatePersonRequest extends FormRequest
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
            // 'cPerImage' => [$this->route('people.edit') ? 'nullable' : 'required', 
            //     'mimes: jpg, png',
            //     'max: 2000'],
            'cPerImage' => 'required', 
            'cPerApellido' => 'required',
            'cPerNombre' => 'required',             
            'cPerDireccion' => 'required',          
            'dPerFecNac' => 'required',              
            'nPerEdad' => 'required',              
            'nPerSueldo' => 'required',              
            'nPerEstado' => 'required',
            'departamento_id' => [
                'required',
                'exists:departamentos,id',
            ],              
        ];
    }

    public function messages() {
        return [
            'cPerImage' => 'Ingrese una foto',
            // 'cPerImage.mimes' => 'Ingrese un formato válido:jpg,png',
            // 'cPerImage.max' => 'Archivo demasiado grande',
            'cPerApellido' => 'El campo cPerApellido es obligatorio',   
            'cPerNombre' => 'El campo cPerNombre es obligatorio',            
            'cPerDireccion' => 'El campo cPerDireccion es obligatorio',           
            'dPerFecNac' => 'El campo dPerFecNac es obligatorio',               
            'nPerEdad' =>  'El campo nPerEdad es obligatorio',              
            'nPerSueldo' => 'El campo nPerSueldo es obligatorio',               
            'nPerEstado' =>  'El campo nPerEstado es obligatorio',   
            'departamento_id.required' => 'El campo departamento es obligatorio',
        ];
    }
}
