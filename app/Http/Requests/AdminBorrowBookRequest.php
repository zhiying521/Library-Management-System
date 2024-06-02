<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminBorrowBookRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name_number' => 'required|string|regex:/^[0-9]{6,15}$/|max:255',
            'book_number' => 'required|string|max:255',
        ];
    }

    public function messages(): array
    {
        return [
            'name_number.required' => '用户编号不能为空',
            'name_number.string' => '用户编号要为字符串格式',
            'name_number.regex' => '用户编号要为数字格式',
            'book_number.required' => '图书编号不能为空',
            'book_number.string' => '图书编号要为字符串格式',
            'book_number.regex' => '图书编号要为数字格式',
        ];
    }
}
