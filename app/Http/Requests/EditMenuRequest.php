<?php

namespace App\Http\Requests;

use App\Models\Menu;
use Illuminate\Foundation\Http\FormRequest;

class EditMenuRequest extends FormRequest
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
        $id = Menu::find($this->po_menu_id)->id;
        return [
            'menu_name' => 'required|unique:menu,name,'.$id,
        ];
    }

    public function messages()
    {
        return [
            'menu_name.required' => 'Tên menu buộc phải nhập.',
            'menu_name.unique' => 'Tên menu đã tồn tại trong hệ thống.'
        ];
    }
}
