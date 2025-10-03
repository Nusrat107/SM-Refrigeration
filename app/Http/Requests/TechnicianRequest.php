<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TechnicianRequest extends FormRequest
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
            'name' => 'required|string',
            'phone' => 'required|string',
            'dob' => 'required|string',
            'nid' => 'required|string',
            'present_address' => 'required|string',
            'permanent_address' => 'required|string',
            'join_date' => 'required|string',
            'Type_of_work' => 'required|string',
            'image' => 'required|string',
        ];
    }
}
