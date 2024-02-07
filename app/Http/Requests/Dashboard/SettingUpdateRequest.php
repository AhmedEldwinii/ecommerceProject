<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;

class SettingUpdateRequest extends FormRequest
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
            'name'=>'string|nullable',
            'email' => 'email|nullable',
            'description' =>'string|nullable',
            'address'=> 'string|nullable',
            'logo'=> 'image|nullable',
            'favicon'=> 'image|nullable',
            'phone'=> 'integer|nullable|max:70',
            'facebook'=> 'string|nullable',
            'youtube'=> 'string|nullable',
            'twitter'=> 'string|nullable',
            'instagram'=> 'string|nullable',

        ];
    }
}
