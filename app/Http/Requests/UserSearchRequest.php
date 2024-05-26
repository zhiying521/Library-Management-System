<?php

namespace app\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserSearchRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'query' => 'required|string',
        ];
    }
    public function messages():array
    {
        return [
            'query.required'=>'搜索不能为空',
            'query.string'=>'搜索要为字符串格式',
        ];
    }
}
