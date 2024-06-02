<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserBorrowSearchRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'query' => 'required|string|regex:/^\d+$/',
        ];
    }
    public function messages():array
    {
        return [
            'query.required' => '输入的不能为空',
            'query.string' => '输入的不是字符串',
            'query.regex' => '输入的不是数字',
        ];
    }
}
