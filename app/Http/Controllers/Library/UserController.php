<?php

namespace App\Http\Controllers\Library;

use App\Business\UserBusiness;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserBorrowSearchRequest;
use App\Http\Requests\UserPasswordRequest;
use App\Http\Requests\UserSearchRequest;
use App\Http\Response\Error;
use App\Http\Response\Response;
use App\Http\Response\Success;
use App\Models\BorrowBook;
use App\Models\LibraryBook;
use Illuminate\Contracts\View\View;


class UserController extends Controller
{
    /**
     * 图书列表
     * @return View
     */
    public function bookIndex():View
    {
        $book = LibraryBook::paginate(6);
        return view('library.books_index', ['books'=>$book]);
    }
    /**
     * 搜索图书
     * @param UserSearchRequest $request
     * @param UserBusiness $business
     * @return Response
     */
    public function search(UserSearchRequest $request, UserBusiness $business): Response
    {
        if($business->bookSearch($request))
        {
            return new Success(
                ['message'=>'搜素成功']
            );
        }
        return new Error(trans('搜索失败,请输入书名或作者'));
    }

    /**
     * 修改个人密码
     * @param UserPasswordRequest $request
     * @param UserBusiness $business
     * @return Response
     */
    public function password(UserPasswordRequest $request, UserBusiness $business): Response
    {
        if ($business->updatePassword($request->email, $request->old_password, $request->new_password)) {
            return new Success([
                'mes' => '修改成功'
            ]);
        }
        return new Error(trans('修改失败'));
    }
    /**
     * 借阅图书信息
     * @param UserBorrowSearchRequest $request
     * @param UserBusiness $business
     * @return Response
     */
    public function borrowSearch(UserBorrowSearchRequest $request, UserBusiness $business): Response
    {
        if($business->borrow($request))
        {
            return new Success(
                ['message'=>'搜索成功']
            );
        }
        return new Error(trans('搜索失败,请输入借阅编号'));
    }
}
