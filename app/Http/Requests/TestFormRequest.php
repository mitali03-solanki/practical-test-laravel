<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Http\FormRequest;

class TestFormRequest extends FormRequest
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
            // Validation rules corresponding to the 'tests' table columns
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:tests,email',
            'description' => 'nullable|string',
            'age' => 'required|integer|min:0',
        ];
    }
   
}
