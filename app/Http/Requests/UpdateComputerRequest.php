<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateComputerRequest extends FormRequest
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
            'computer_brand' => 'sometimes|required|string|max:100',
            'computer_model' => 'sometimes|required|string|max:100',
            'computer_price' => 'sometimes|required|numeric|min:0',
            'computer_ram_size' => 'sometimes|required|integer|min:0',
            'computer_is_laptop' => 'sometimes|required|boolean',
        ];
    }
}
