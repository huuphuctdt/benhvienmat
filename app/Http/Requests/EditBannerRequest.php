<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditBannerRequest extends FormRequest
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
            'logo' => 'max:20480|image',
        ];
    }

    public function messages()
    {
        return [
            'logo.max' => 'Tối đa dung lượng là 20Mb.',
            'logo.image' => 'Đây không phải File hình.',
        ];
    }
}
