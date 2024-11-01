<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServicioRequest extends FormRequest
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
			'descripcion' => 'required|string',
			'costo' => 'required',
			'tipo_servicios_id' => 'required',
			'vehiculos_id' => 'required',
			'clientes_id' => 'required',
        ];
    }
}
