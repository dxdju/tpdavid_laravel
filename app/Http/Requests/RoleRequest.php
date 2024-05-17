<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RoleRequest extends FormRequest
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
            'intitule' => 'required|unique:roles,intitule'
        ];
    }
    public function messages()
    {
        return [
            'intitule.required' => 'Le nom du role est obligatoire',
            'intitule.unique' => 'Le nom du role est déjà utilisé'
        ];
    }
}
