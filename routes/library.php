<?php

use App\Http\Controllers\Library\IndexController;
use App\Http\Controllers\Library\UserController;
use Illuminate\Support\Facades\Route;

Route::prefix('login')->group(function ($route){
    $route->post('register',[IndexController::class,'register']);
    $route->post('',[IndexController::class,'login'])->middleware('throttle:10,1');
    $route->post('logout',[IndexController::class,'logout']);
    $route->post('refresh',[IndexController::class,'refresh']);
});
Route::prefix('user')->group(function($route){
    $route->get('',[UserController::class,'user']);
});
