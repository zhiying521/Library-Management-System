<?php

namespace app\Http\Controllers\Library;

use app\Business\AdminBusiness;
use App\Http\Controllers\Controller;
use app\Http\Requests\AdminAddBookRequest;
use App\Http\Requests\AdminBorrowBookRequest;
use app\Http\Requests\AdminDeleteRequest;
use app\Http\Requests\AdminReturnBookRequest;
use app\Http\Requests\AdminSearchBookRequest;
use app\Http\Requests\AdminUpdateRequest;
use app\Http\Response\Error;
use app\Http\Response\Response;
use app\Http\Response\Success;
use app\Models\BorrowBook;
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
     * @return void
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
