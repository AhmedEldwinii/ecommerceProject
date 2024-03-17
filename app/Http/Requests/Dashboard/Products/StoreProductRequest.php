<?php

namespace App\Http\Requests\Dashboard\Products;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return Auth::user()->type == "admin";
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' =>'required|string|max:255',
            'description' =>'required|string',
            'price' => 'nullable|numeric',
            'category_id' => 'nullable|numeric|exists:categories,id',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048|nullable' ,
            'discount_price' => 'nullable|numeric',
        ];
    }
}
