<?php

namespace app\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserPasswordRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'email'=>'required|email',
            'old_password'=>'required|string|min:6',
            'new_password'=>'required|string|min:6|confirmed',
        ];
    }
    public function messages():array
    {
        return [
            'email.required'=>'邮箱不能为空',
            'email.email'=>'邮箱格式不正确',
            'old_password.required'=>'旧密码不能为空',
            'old_password.string'=>'旧密码要为字符串格式',
            'old_password.min'=>'旧密码不能少于6位',
            'new_password.required'=>'新密码不能为空',
            'new_password.string'=>'新密码要为字符串格式',
            'new_password.min'=>'新密码不能少于6位',
            'new_password.confirmed'=>'两次密码不一致',
        ];
    }
}
