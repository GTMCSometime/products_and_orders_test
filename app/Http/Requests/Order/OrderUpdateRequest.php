<?php

namespace App\Http\Requests\Order;

use Illuminate\Foundation\Http\FormRequest;

class OrderUpdateRequest extends FormRequest
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
            'product_id' => 'required|exists:products,id',
            'customer_name' => 'required|string',
            'customer_comment' => 'nullable|string',
            'product_count' => 'required|numeric|min:1'
        ];
    }


    public function messages(): array {
        return [
            'product_count.min' => 'не может быть меньше 1!',
        ];
    }
}
