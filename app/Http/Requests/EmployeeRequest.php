<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

use Illuminate\Contracts\Validation\Validator;
use App\Http\Helpers\ResponseHelpers;

class EmployeeRequest extends FormRequest
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
            'full_name' => 'required|string|max:255',
            'birth_date' => 'required|date',
            'location_birth' => 'required|string|max:255',
            'location_exist' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'url_avatar' => 'required|string|max:255',
            'join_date' => 'required|date',
            'position_id' => 'required|integer',
            'nik' => 'required|string|max:255',
            'salary' => 'required|integer',
            'email' => 'required|string|max:255',
            'phone_number' => 'required|string|max:255',
            'password' => 'required|string|max:255',
            'status' => 'required|string|in:active,inactive',
            'created_by' => 'required|string|max:255',
        ];
    }

    public function failedValidation(Validator $validator)
    {
        ResponseHelpers::sendError('Validation Error.', $validator->errors());
    }
    
}
