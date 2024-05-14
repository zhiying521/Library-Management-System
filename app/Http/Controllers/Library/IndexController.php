<?php

namespace App\Http\Controllers\Library;

use App\Business\UserBusiness;
use App\Http\Controllers\Controller;
use App\Http\Requests\IndexLoginRequest;
use App\Http\Requests\indexRegisterRequest;
use App\Http\Response\Response;
use App\Http\Response\Success;

class IndexController extends Controller
{
    public function register(IndexRegisterRequest $request, UserBusiness $business ):Response
    {
        return new Success(
            $business->UserRegister($request)
        );
   }
    /**
     * 登录
     *校验账号和密码
     */
    public function login(IndexLoginRequest $request,UserBusiness $business):Response
    {
       return new Success(
           $business->UserLogin($request)
       );
    }
}
