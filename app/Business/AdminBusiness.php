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
        if ($libraryBook->book_num <= 0) {
            LibraryBook::query()->where('book_number', $book_number)->update(['book_status' => '0']);
            return false;
        } else {
            LibraryBook::query()->where('book_number', $book_number)->update(['book_num' => $libraryBook->book_num - 1]);
            BorrowBook::query()->create([
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
        if ($borrow_book->return_status == 0)
          {
              return $this->returnBook($borrow_book->date,$borrow_book->due_date,$borrow_book,$book_number);
          }
        else{
            return $this->returnBook($borrow_book->due_date,$borrow_book->return_date,$borrow_book,$book_number);
        }
    }

    /**
     * 搜索书籍
     * @param string $searchTerm
     * @return array|string[]
     */
    public function search(Request $request): array
    {
        $searchTerm=$request->input('query');
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
     * 添加书籍
     * @param Request $request
     * @return string[]
     */
    public function add(Request $request): array
    {
        LibraryBook::query()->create($request->all());
        return [
            'mes' => '添加成功',
        ];
    }

    /**
     * 修改书籍
     * @param Request $request
     * @return string[]
     */
    public function update(Request $request): array
    {
        LibraryBook::query()->where('book_number', $request->book_number)->update($request->all());
        return [
            'mes' => '修改成功',
        ];
    }

    /**
     * 删除书籍
     * @param Request $request
     * @return string[]
     */
    public function delete(Request $request): array
    {
        LibraryBook::query()->where('book_number', $request->book_number)->delete();
        return [
            'mes' => '删除成功',
        ];
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
        }
        else{
            $borrow_book->update(['return_date'=>Carbon::now()->addDays(14)->toDateString(),'return_status'=>rand(1,9)]);
            return false;
        }
    }
}
