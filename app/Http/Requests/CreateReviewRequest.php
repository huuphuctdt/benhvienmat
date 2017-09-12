<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateReviewRequest extends FormRequest
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
            'name' => 'required',
            'image' => 'required|image|max:20480',
            'content' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Tên của khách hàng buộc phải nhập.',
            'image.required' => 'Hình buộc phải chọn.',
            'content.required' => 'Nội dung buộc phải nhập.',
            'image.image' => 'Đây không phải File hình.',
            'image.max' => 'Tối đa dung lượng là 20Mb.'
        ];
    }
}
