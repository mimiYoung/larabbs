<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Auth;

class UserRequest extends FormRequest
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
            'name' => 'required|between:3,25|regex:/^[A-Za-z0-9\-\_]+$/|unique:users,name,' . Auth::id(),
            'email' => 'required|email',
            'introduction' => 'max:80',
        ];
    }

    public function messages()
    {
        return [
            'name.unique' => '用户名已被使用，请换一个',
            'name.regex' => '用户名支持英文、数字、横杠和下划线',
            'name.between' => '用户名需要在 3 - 25 个字符之间',
            'name.required' => '用户名不能为空',
            'avatar.mines' => '头像格式须为 jpeg, bmp, png, gif',
            'avatar.dimensions' => '图片的宽高须 200px 以上'
        ];
    }
}
