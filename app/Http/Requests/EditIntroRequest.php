<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditIntroRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'logo' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'logo.required' => 'Nội dung buộc phải nhập.',
        ];
    }
}
