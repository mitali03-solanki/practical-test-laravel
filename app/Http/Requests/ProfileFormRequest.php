<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileFormRequest extends FormRequest
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
            //
            'name' => 'required|string|max:255',
            'phone' => 'nullable|string',
            'email' => 'required|email|unique:users,email',
            // 'role' => 'admin,user',
            'qualification' => 'array',
            'qualification.title' => 'required|string',
            'qualification.institute' => 'nullable',
            'qualification.year' => 'nullable|digit:4',
            'qualification.grade' => 'nullable|string',

        ];
    }
}
