<?php

use app\Http\Controllers\Library\AdminController;
use app\Http\Controllers\Library\IndexController;
use app\Http\Controllers\Library\UserController;
use Illuminate\Support\Facades\Route;

/** 登录注册 */
Route::prefix('login')->group(function ($route) {
    $route->post('register', [IndexController::class, 'register']);
    $route->post('', [IndexController::class, 'login'])->middleware('throttle:10,1');
    $route->post('logout', [IndexController::class, 'logout']);
    $route->post('refresh', [IndexController::class, 'refresh']);
});
/** 用户 */
Route::prefix('user')->group(function ($route) {
    $route->get('book_index', [UserController::class, 'bookIndex']);
    $route->get('search', [UserController::class, 'search']);
    $route->post('password', [UserController::class, 'password']);
    $route->get('borrow_search', [UserController::class, 'borrowSearch']);
});
/** 管理员 */
Route::prefix('admin')->group(function ($route) {
    $route->post('borrow_index', [AdminController::class, 'borrowIndex']);
    $route->post('borrow_book', [AdminController::class, 'borrowBook']);
    $route->post('return_book', [AdminController::class, 'returnBook']);
    $route->post('search_book',[AdminController::class,'searchBook']);
    $route->post('add_book',[AdminController::class,'addBook']);
    $route->post('update_book',[AdminController::class,'updateBook']);
    $route->post('delete_book',[AdminController::class,'deleteBook']);
});
