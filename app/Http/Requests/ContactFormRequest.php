<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactFormRequest extends FormRequest
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
            'client_name' => 'required|string|max:255',
            'client_phone' => 'required|string|max:15',
            'client_email' => 'nullable|sometimes|email',
            'client_file' => 'mimes:pdf,jpg,jpeg,png,gif|max:2048', // Проверка на формат файла и размер
            'client_comment' => 'required|string|max:1000',
        ];
    }
}
