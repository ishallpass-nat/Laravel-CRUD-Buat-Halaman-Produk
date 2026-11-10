<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;


class CustomerRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'city' => 'required|string',
        ];
    }
    public function messages():array{
        return [
            'name.required' => "Nama customer harus diisi.",
            'name.max' => "nama Customer Maksimal 255 karakter",

            'email.required' => "Email customer harus diisi.",
            'email.max' => "Email Customer Maksimal 255 karakter",
            'email.email' => "Format Email tidak valid.
            Contoh email valid adalah agus@gmail.com",
            
            'city.required' => "kota harus diisi",

        ];
    }
}
