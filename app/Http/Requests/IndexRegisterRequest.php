<?php

namespace app\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class IndexRegisterRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name'=>'required|string|unique:library_users',
            'name_number'=>'required|string|unique:library_users|regex:/^[1][0-9]+{6,12}$/',
            'password'=>'required|string|min:6|confirmed',
            'email'=>'required|email|unique:library_users',
        ];
    }
    public function messages():array
    {
        return [
            'name.required'=>'用户名不能为空',
            'name.string'=>'用户名要为字符串格式',
            'name.unique'=>'用户名已存在',
            'password.required'=>'密码不能为空',
            'password.string'=>'密码要为字符串格式',
            'password.min'=>'密码不能少于6位',
            'password.confirmed'=>'两次密码不一致',
            'email.required'=>'邮箱不能为空',
            'email.email'=>'邮箱格式不正确',
            ];
        }
}
