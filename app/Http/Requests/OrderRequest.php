<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;


class OrderRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'customer_id' => 'required|string|max:255',
            'order_number' => 'required|string|max:255',
            'order_date' => 'required',
            'total' => 'required|numeric',
            'status' => 'required',
        ];
    }
    public function messages():array{
        return [
            'customer_id.required' => "Pilih customer.",

            'order_number.required' => "Order number harus diisi.",
            'order_number.max' => "nama Customer Maksimal 255 karakter",
            'order_date.required' => "Tanggal harus diisi.",

            'total.required' => "Total harus diisi.",
            'total.numeric' => "Total harus berupa angka.",
            
            'status.required' => "Status harus diisi",

        ];
    }
}
