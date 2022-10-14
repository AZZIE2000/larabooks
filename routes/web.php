<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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

Route::get('books', [BooksController::class, "index"]);
Route::get('/', [BooksController::class, "index"]);


Route::get('show/{id}', [BooksController::class, "show"]);
Route::get('edit/{id}', [BooksController::class, "edit"]);


// store books data form
// Route::get('create', function () {
//     return view('create');
// });
Route::get('/add', [BooksController::class, "create"]);
Route::post('/books', [BooksController::class, "store"]);
Route::get('/del/{id}', [BooksController::class, "dropItem"]);

Route::post('/blah/{id}', [BooksController::class, "update"]);

Route::get('/register', [UserController::class, "create"]);

Route::post('/store', [UserController::class, "store"]);

Route::post('/logout', [UserController::class, "logout"]);

Route::get('/login', [UserController::class, "login"]);

Route::post('/authenticate', [UserController::class, "authenticate"]);
