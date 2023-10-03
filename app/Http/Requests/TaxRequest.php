<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TaxRequest extends FormRequest
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
            'taxable' => 'required | numeric | min:1'
        ];
    }

    public function messages(): array
    {
        return [
            'taxable.required' => 'Đây là trường bắt buộc',
            'taxable.numeric' => 'Vui lòng nhập số',
            'taxable.min' => 'Thu nhập ít nhất là 1',
        ];
    }
}
