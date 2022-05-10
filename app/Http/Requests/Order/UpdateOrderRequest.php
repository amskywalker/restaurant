<?php

namespace App\Http\Requests\Order;

use Illuminate\Foundation\Http\FormRequest;
use JetBrains\PhpStorm\ArrayShape;

class UpdateOrderRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    #[ArrayShape(['active' => "string", 'product_id' => "string", 'persons_quantity' => "string", 'payment_method' => "string"])]
    public function rules(): array
    {
        return [
            'active' => 'nullable',
            'product_id' => 'nullable',
            'persons_quantity' => 'nullable',
            'payment_method' => 'nullable'
        ];
    }
}
