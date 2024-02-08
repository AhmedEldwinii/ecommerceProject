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
            'description' =>'string|nullable|max:100',
            'email' => 'email|nullable',
            'address'=> 'string|nullable',
            'logo'=> 'image|nullable',
            'favicon'=> 'image|nullable',
            'phone'=> 'string|nullable',
            'facebook'=> 'string|nullable',
            'youtube'=> 'string|nullable',
            'twitter'=> 'string|nullable',
            'instagram'=> 'string|nullable',

        ];
    }
}
