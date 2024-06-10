<?php

namespace App\Business;

use App\Models\BorrowBook;
use App\Models\LibraryBook;
use App\Models\LibraryUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserBusiness
{
    /**
     * 用户注册
     * @param Request $request
     * @return bool
     */
    public function userRegister(Request $request): bool
    {
        LibraryUser::query()->create($request->only(['name_number', 'name', 'password', 'email']));
        return true;
    }

    /**
     * 用户登录
     * @param string $password
     * @param LibraryUser $user
     * @return bool
     */
    public function userLogin(string $password,LibraryUser $user): bool
    {
        if (Hash::check($password, $user->password)) {
            return true;
        }
        return false;
    }

    /**
     * 用户查询图书
     * @param Request $request
     * @return bool
     */
    public function bookSearch(Request $request):bool
    {
        $searchTerm = $request->input('query');
        // 如果没有搜索关键词，返回空结果
        if (empty($searchTerm)) {
            return false;
        }
        // 使用 Eloquent ORM 进行搜索
         LibraryBook::query()->where('book_name', 'LIKE', '%' . $searchTerm . '%')
            ->orWhere('book_author', 'LIKE', '%' . $searchTerm . '%')
            ->paginate(6); // 分页显示搜索结果
        return true;
    }

    /**
     * 修改个人密码
     * @param string $email
     * @param string $old_password
     * @param string $new_password
     * @return bool
     */
    public function updatePassword(string $email, string $old_password, string $new_password): bool
    {

        $user = LibraryUser::query()->where('email', $email)->firstOrFail();
        if (Hash::check($old_password, $user->password)) {
            $user->update(['password' => $new_password]);
            return true;
        } else {
            return false;
        }
    }

    /**
     * 书籍借阅信息查询
     * @param Request $request
     * @return bool
     */
    public function borrow(Request $request):bool
    {
        $searchTerm = $request->input('query');
        // 如果没有搜索关键词，返回空结果
        if (empty($searchTerm)) {
               return false;
        }
        // 使用 Eloquent ORM 进行搜索
       BorrowBook::query()->where('name_number', 'LIKE', '%' . $searchTerm . '%')
            ->paginate(6); // 分页显示搜索结果
        return true;
    }
}
