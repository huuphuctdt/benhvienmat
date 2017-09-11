<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditPostCategoryRequest extends FormRequest
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
            'image' => 'image|max:20480'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Tên của danh mục buộc phải nhập.',
            'image.max' => 'Tối đa dung lượng là 20Mb.',
            'image.image' => 'Đây không phải File hình.',
        ];
    }
}
