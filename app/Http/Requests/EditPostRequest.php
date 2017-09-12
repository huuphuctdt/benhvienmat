<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditPostRequest extends FormRequest
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
            'post_category' => 'required',
            'name' => 'required',
            'content' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'post_category.required' => 'Danh mục buộc phải chọn!',
            'name.required' => 'Tên bài viết buộc phải nhập!',
            'content.required' => 'Nội dung bài viết buộc phải nhập!'
        ];
    }
}
