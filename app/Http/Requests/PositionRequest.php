<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

use Illuminate\Contracts\Validation\Validator;
use App\Http\Helpers\ResponseHelpers;

class PositionRequest extends FormRequest
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
            'title' => 'required|string|max:255',
            'status' => 'required|string|in:active,inactive',
            'created_by' => 'required|string|max:255',
        ];
    }

    public function failedValidation(Validator $validator)
    {
        ResponseHelpers::sendError('Validation Error.', $validator->errors());
    }
}
