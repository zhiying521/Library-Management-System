<?php

namespace app\Business;

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
     * @return string[]
     */
    public function userRegister(Request $request): array
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

    /**
     * 用户登录
     * @param Request $request
     * @param $user
     * @return bool
     */
    public function userLogin(Request $request, $user): bool
    {
        if (!$user) {
            return false;
        }
        if (Hash::check($request->password, $user->password)) {
            return true;
        }
        return false;
    }

    /**
     * 用户查询图书
     * @param string $searchTerm
     * @return array|string[]
     */
    public function bookSearch( string $searchTerm): array
    {
        // 如果没有搜索关键词，返回空结果
        if (empty($searchTerm)) {
            return
                [
                    'mes' => '请输入书名或作者',
                ];
        }
        // 使用 Eloquent ORM 进行搜索
        $books = LibraryBook::query()->where('book_name', 'LIKE', '%' . $searchTerm . '%')
            ->orWhere('book_author', 'LIKE', '%' . $searchTerm . '%')
            ->paginate(6); // 分页显示搜索结果
        return [
            'books' => $books,
            'mes' => '搜索成功',
        ];
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
        $user = LibraryUser::query()->where('email', $email)->first();
        if (Hash::check($old_password, $user->password)) {
            $user->update(['password' => $new_password]);
            return true;
        } else {
            return false;
        }
    }

    /**
     * 书籍借阅信息查询
     * @param string $searchTerm
     * @return array|string[]
     */
    public function borrow(string $searchTerm): array
    {
        // 如果没有搜索关键词，返回空结果
        if (empty($searchTerm)) {
            return
                [
                    'mes' => '请输入借阅编号或者书籍编号',
                ];
        }
        // 使用 Eloquent ORM 进行搜索
        $borrow_information = BorrowBook::query()->where('name_number', 'LIKE', '%' . $searchTerm . '%')
            ->orWhere('book_number', 'LIKE', '%' . $searchTerm . '%')
            ->paginate(6); // 分页显示搜索结果
        return [
            'date' => $borrow_information,
            'mes' => '搜索成功',
        ];
    }
}
