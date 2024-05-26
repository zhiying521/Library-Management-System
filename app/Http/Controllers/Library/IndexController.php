<?php

namespace app\Http\Controllers\Library;

use app\Business\UserBusiness;
use App\Http\Controllers\Controller;
use App\Http\Requests\IndexLoginRequest;
use App\Http\Requests\indexRegisterRequest;
use App\Http\Response\Error;
use App\Http\Response\Response;
use App\Http\Response\Success;
use App\Models\LibraryUser;

class IndexController extends Controller
{
    /**
     * 用户注册
     * @param indexRegisterRequest $request
     * @param UserBusiness $business
     * @return Response
     */
    public function register(IndexRegisterRequest $request, UserBusiness $business): Response
    {
        return new Success(
            $business->userRegister($request)
        );
    }

    /**
     * 登录
     *校验账号和密码
     * @param IndexLoginRequest $request
     * @param UserBusiness $business
     * @return Response
     */
    public function login(IndexLoginRequest $request, UserBusiness $business): Response
    {
        $user = LibraryUser::query()->where('name', $request->name)->firstOrFail();
        if ($business->userLogin($request, $user)) {
            if ($user->is_admin == '1') {
                return new Success([
                    'message' => '跳转到管理员页面'
                ]);
            }
            return new Success([
                'message' => '跳转到借阅者页面'
            ]);
        }
        return new Error(trans('账号或者密码错误'));
    }
}
