<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

use Illuminate\Contracts\Validation\Validator;
use App\Http\Helpers\ResponseHelpers;

class RequestLeaveRequest extends FormRequest
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
            'id_employee' => 'required|integer',
            'leave_from' => 'required|date',
            'leave_to' => 'required|date',
            'status' => 'required|string|in:active,inactive',
            'is_approved' => 'required|string|in:approved,pending,rejected',
            'reject_remark' => 'required|string|max:255',
            'created_by' => 'required|string|max:255',
            'updated_by => required|string|max:255',
        ];
    }

    public function failedValidation(Validator $validator)
    {
        ResponseHelpers::sendError('Validation Error.', $validator->errors());
    }
}
