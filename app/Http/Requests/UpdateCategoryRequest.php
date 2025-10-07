<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCategoryRequest extends FormRequest
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
            'categories_name' => 'sometimes|required|string|max:30',
            'categories_description' => 'sometimes|nullable|string|max:255',
            'categories_status' => 'sometimes|required|boolean',
            'categories_created_date' => 'sometimes|nullable|date',
        ];
    }
}
