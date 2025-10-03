<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InvoiceRequest extends FormRequest
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
            'contact_number' => 'required|string',
            'district' => 'required|string',
            'product_brand' => 'required|string',
            'product_model' => 'required|string',
            'product_quantity' => 'required|integer',
            'product_category' => 'required|string',
            'customer_name' => 'required|string',
            'product_received_date' => 'required|string',

        ];
    }
}
