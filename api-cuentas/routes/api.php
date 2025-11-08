<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Accountscontroller;
use App\Http\Controllers\CategorysController;
use App\Http\Controllers\TransactionsController;
use App\Http\Controllers\AuthController;

Route::post('/login',[AuthController::class,'login']);

Route::resource('accounts',Accountscontroller::class);
Route::post('changestatus',[AccountsController::class,'changestatus']);
Route::resource('category',CategorysController::class);
Route::resource('transaction',TransactionsController::class);


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
