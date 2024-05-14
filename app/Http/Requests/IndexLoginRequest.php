<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class IndexLoginRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name'=>'required|string',
            'password'=>'required|string|min:6',
        ];
    }
    public function messages():array
    {
        return [
            'name.required'=>'用户名不能为空',
            'name.string'=>'用户名要为字符串格式',
            'password.required'=>'密码不能为空',
            'password.string'=>'密码要为字符串格式',
            'password.min'=>'密码不能少于6位',
        ];
    }
}
