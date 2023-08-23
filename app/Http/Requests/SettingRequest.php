<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SettingRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        $data = [
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'favicon' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048|
            dimensions:min_width=16,min_height=16,max_width=152,max_height=152|
                mimetypes:image/png,image/vnd.microsoft.icon',
            'facebook' => 'nullable|url',
            'instagram' => 'nullable|url',
            'email' => 'nullable|email',
            'phone' => 'nullable|regex:/^[0-9]{10}$/',
        ];

        foreach (config('translatable.languages') as $lang_short => $lang) {
            $data[$lang_short . '*.email'] = 'nullable|email';
            $data[$lang_short . '*.content'] = 'nullable|string|min:10';
            $data[$lang_short . '*.address'] = 'nullable';
        }

        
        return $data;
    }
}
