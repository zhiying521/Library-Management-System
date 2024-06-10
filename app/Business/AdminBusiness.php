<?php

namespace App\Business;

use App\Models\BorrowBook;
use App\Models\LibraryBook;
use App\Models\LibraryUser;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AdminBusiness
{
    /**
     * 借阅书籍
     * @param string $name_number
     * @param string $book_number
     * @return bool
     */
    public function borrow(string $name_number, string $book_number): bool
    {
        LibraryUser::query()->where('name_number', $name_number)->firstOrFail();
        $libraryBook = LibraryBook::query()->where('book_number', $book_number)->firstOrFail();
        if ($libraryBook->book_num <= 0 or $libraryBook->book_status == '0') {
            LibraryBook::query()->where('book_number', $book_number)->update(['book_status' => '0']);
            return false;
        } else {
            LibraryBook::query()->where('book_number', $book_number)->update(['book_num' => $libraryBook->book_num - 1]);
            BorrowBook::query()->insert([
                'name_number' => $name_number,
                'book_number' => $book_number,
                'borrow_date' => Carbon::now(),
                'due_date' => Carbon::now()->addDays(15),
                'return_date' => null,
            ]);
            return true;
        }
    }

    /**
     * 归还书籍
     * @param string $name_number
     * @param string $book_number
     * @return bool
     */
    public function return(string $name_number, string $book_number): bool
    {
        $borrow_book = BorrowBook::query()->where('name_number', $name_number)->where('book_number', $book_number)->firstOrFail();
        if ($borrow_book->return_status == 0) {
            return $this->returnBook($borrow_book->date, $borrow_book->due_date, $borrow_book, $book_number);
        } else {
            return $this->returnBook($borrow_book->due_date, $borrow_book->return_date, $borrow_book, $book_number);
        }
    }

    /**
     * 搜索书籍
     * @param Request $request
     * @return bool
     */
    public function search(Request $request): bool
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
     * 添加书籍
     * @param Request $request
     * @return bool
     */
    public function add(Request $request): bool
    {
        LibraryBook::query()->create(
            $request->only(
                ['book_number', 'book_name', 'book_author', 'book_press',
                    'book_price', 'book_local', 'book_num', 'book_status']
            ));
        return true;
    }

    /**
     * 修改书籍
     * @param Request $request
     * @return bool
     */
    public function update(Request $request): bool
    {
        LibraryBook::query()->where('book_number', $request->book_number)->update(
            [
                'book_number' => $request->book_number,
                'book_name' => $request->book_name,
                'book_author' => $request->book_author,
                'book_press' => $request->booK_press,
                'book_price' => $request->boook_price,
                'book_local' => $request->book_local,
                'book_num' => $request->book_num,
                'book_status' => $request->book_status,
            ]);
        return true;
    }

    /**
     * 删除书籍
     * @param Request $request
     * @return bool
     */
    public function delete(Request $request): bool
    {
        $borrowBook = BorrowBook::query()->where('book_number', $request->book_number)->firstOrFail();
        if ($borrowBook->return_date != null) {
            $libararyBook = LibraryBook::query()->where('book_number', $request->book_number)->delete();
            if ($libararyBook->delete_at != null) {
                return true;
            }
        }
        return false;
    }

    /**
     * 归还书籍
     * @param int $date1
     * @param int $date2
     * @param $borrow_book
     * @param $book_number
     * @return bool
     */
    public function returnBook(int $date1, int $date2, $borrow_book, $book_number): bool
    {
        if (Carbon::now()->between($date1, $date2)) {
            $borrow_book->update(['return_date' => Carbon::now()]);
            $book = LibraryBook::query()->where('book_number', $book_number)->firstOrFail();
            $book->update(['book_number' => $book->book_number + 1]);
            $borrow_book->delete();
            return true;
        } else {
            $borrow_book->update(['return_date' => Carbon::now()->addDays(14)->toDateString(), 'return_status' => rand(1, 9)]);
            return false;
        }
    }
}
