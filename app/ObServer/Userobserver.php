<?php

namespace App\ObServer;
use App\Models\User;
use Illuminate\Support\Str;
class Userobserver
{
    public function updating($id){
//    User::where('id',1)->update(['email_token'=>Str::random(12),'email_active'=>0,'updated_at'=>NULL]);
    User::where('id',$id)->update(['remember_token'=>Null]);
    return '修改成功';
}
}
