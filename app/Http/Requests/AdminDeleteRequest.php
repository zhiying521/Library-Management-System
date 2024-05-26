<?php

namespace app\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminDeleteRequest extends FormRequest
{
    public function rules():array
    {
       return [
           'book_number'=>'required|string',
           'book_name'=>'required|string',
       ];
    }
    public function messages():array
    {
        return [
            'book_number.required'=>'图书编号不能为空',
            'book_number.string'=>'图书编号要为字符串格式',
            'book_name.required'=>'图书名称不能为空',
            'book_name.string'=>'图书名称要为字符串格式',
        ];
    }
}
