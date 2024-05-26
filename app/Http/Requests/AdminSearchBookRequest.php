<?php

namespace app\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminSearchBookRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'query' => 'required|string',
        ];
    }
    public function messages(): array
    {
        return [
            'query.required' => '搜索关键词不能为空',
            'query.string' => '搜索关键词要为字符串格式',
        ];
    }
}
