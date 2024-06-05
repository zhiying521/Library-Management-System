<?php

namespace App\Http\Controllers\Library;

use App\Business\AdminBusiness;
use App\Http\Controllers\Controller;
use App\Http\Requests\AdminAddBookRequest;
use App\Http\Requests\AdminBorrowBookRequest;
use App\Http\Requests\AdminDeleteRequest;
use App\Http\Requests\AdminReturnBookRequest;
use App\Http\Requests\AdminSearchBookRequest;
use App\Http\Requests\AdminUpdateRequest;
use App\Http\Response\Error;
use App\Http\Response\Response;
use App\Http\Response\Success;
use App\Models\BorrowBook;
use Illuminate\Contracts\View\View;

class AdminController extends Controller
{
    /**
     * 借阅书籍列表
     * @return View
     */
    public function borrowIndex(): View
    {
        $borrow = BorrowBook::paginate(6);
        return view('library.borrow_index', ['borrows' => $borrow]);
    }

    /**
     *借阅书籍
     * @param AdminBorrowBookRequest $request
     * @param AdminBusiness $business
     * @return Response
     */
    public function borrowBook(AdminBorrowBookRequest $request, AdminBusiness $business): Response
    {
        if ($business->borrow($request->name_number, $request->book_number)) {
            return new Success([
                'mes' => '借阅成功'
            ]);
        }
        return new Error(trans('借阅失败,此书库存不足！'));
    }

    /**
     * 归还书籍
     * @param AdminReturnBookRequest $request
     * @param AdminBusiness $business
     * @return Response
     */
    public function returnBook(AdminReturnBookRequest $request, AdminBusiness $business): Response
    {
        if ($business->return($request->name_number, $request->book_number)) {
            return new Success([
                'mes' => '归还成功'
            ]);
        }
        return new Error(trans('借阅书籍逾期,需要在图书馆做志愿者一周！'));
    }

    /**
     * 搜索书籍
     * @param AdminSearchBookRequest $request
     * @param AdminBusiness $business
     * @return Response
     */
    public function searchBook(AdminSearchBookRequest $request, AdminBusiness $business): Response
    {
        return new Success($business->search($request));
    }

    /**
     * 添加书籍
     * @param AdminAddBookRequest $request
     * @param AdminBusiness $business
     * @return Response
     */
    public function addBook(AdminAddBookRequest $request, AdminBusiness $business):Response
    {
        return new Success($business->add($request));
    }

    /**
     * 更新书籍
     * @param AdminUpdateRequest $request
     * @param AdminBusiness $business
     * @return Response
     */
    public function updateBook(AdminUpdateRequest $request,AdminBusiness $business):Response
    {
        return new Success($business->update($request));
    }
    public function deleteBook(AdminDeleteRequest $request,AdminBusiness $business):Response
    {
        return new Success($business->delete($request));
    }
}
