<?php

namespace app\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminAddBookRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'book_number' => 'required|string',
            'book_name' => 'required|string',
            'book_author' => 'required|string',
            'book_press' => 'required|string',
            'book_price' => 'required|string|regex:/^\d+$/',
            'book_local' => 'required|string',
            'book_num' => 'required|string|regex:/^\d+$/',
            'book_status' => 'required|string',
        ];
    }

    public function messages(): array
    {
        return [
            'book_number.required' => '图书编号不能为空',
            'book_number.string' => '图书编号要为字符串格式',
            'book_name.required' => '图书名称不能为空',
            'book_name.string' => '图书名称要为字符串格式',
            'book_author.required' => '图书作者不能为空',
            'book_author.string' => '图书作者要为字符串格式',
            'book_press.required' => '图书出版社不能为空',
            'book_press.string' => '图书出版社要为字符串格式',
            'book_price.required' => '图书价格不能为空',
            'book_price.string' => '图书价格要为字符串格式',
            'book_price.regex' => '图书价格要为数字格式',
            'book_local.required' => '图书位置不能为空',
            'book_local.string' => '图书位置要为字符串格式',
            'book_num.required' => '图书数量不能为空',
            'book_num.string' => '图书数量要为字符串格式',
            'book_num.regex' => '图书数量要为数字格式',
            'book_status.required' => '图书状态不能为空',
            'book_status.string' => '图书状态要为字符串格式',
            ];
    }
}
