<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BooksController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/',[BooksController::class, "index"]);
Route::get('back',[BooksController::class, "back"]);
Route::get('create',[BooksController::class, "create"]);
Route::post('insert',[BooksController::class, "insert"]);
Route::get('delete/{id}',[BooksController::class, "delete"]);
Route::get('edit/{id}',[BooksController::class, "edit"]);
Route::post('update/{id}',[BooksController::class, "update"]);
Route::get('read/{id}',[BooksController::class, "read"]);





