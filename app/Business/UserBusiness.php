<?php

namespace App\Business;

use App\Models\LibraryUser;
use Illuminate\Support\Facades\Hash;

class UserBusiness
{
    public function UserRegister($request):array
    {
        $user = LibraryUser::query()->create($request->all());
        if ($user) {
            return ([
                'mes' => '注册成功',
            ]);
        }
        return ([
            'mes' => '注册失败',
        ]);
    }
    public function UserLogin($request):array
    {
        $user = LibraryUser::query()->where('name', $request->name)->first();
        if (!$user) {
            return ([
                'mes' => '用户不存在,请先注册',
            ]);
        }
        if (Hash::check($request->password, $user->password)) {
            if ($user->is_admin == 1) {
                return ([
                    'message' => '跳转管理员页面',
                ]);
            }
            return ([
                'message' => '跳转用户页面',
            ]);
        }
        return ([
            'message' => '密码错误',
        ]);
    }
}
