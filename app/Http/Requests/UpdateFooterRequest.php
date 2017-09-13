<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateFooterRequest extends FormRequest
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
            'address' => 'required',
            'phone' => 'required',
            'gmail' => 'required',
            'facebook' => 'required',
            'twitter' => 'required',
            'linkedin' => 'required',
            'google_plus' => 'required',
            'copy_right' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'address.required' => 'Địa chỉ buộc phải nhập.',
            'phone.required' => 'SĐT buộc phải nhập.',
            'gmail.required' => 'Gmail buộc phải nhập.',
            'facebook.required' => 'Facebook buộc phải nhập.',
            'twitter.required' => 'Twitter buộc phải nhập.',
            'linkedin.required' => 'Linkedin buộc phải nhập.',
            'google_plus.required' => 'Google Plus buộc phải nhập.',
            'copy_right.required' => 'Copy Right buộc phải nhập.'
        ];
    }
}
