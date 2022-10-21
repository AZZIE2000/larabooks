<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\AuthorController;

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
// main routes *****************
Route::get('books', [BooksController::class, "index"]);
Route::get('/', [BooksController::class, "index"]);
Route::get('/sort/{sort?}', [BooksController::class, "index"]);
// main routes****************

// single book page
Route::get('show/{id}', [BooksController::class, "show"]);
// show edit book form
Route::get('edit/{id}', [BooksController::class, "edit"]);
// edit book form method
Route::post('/edit-book/{id}', [BooksController::class, "update"]);

// show add book for author page-------
Route::get('/add', [BooksController::class, "create"]);
// add book for author form--------
Route::post('/books', [BooksController::class, "store"]);
// delete a book
Route::delete('/del/{id}', [BooksController::class, "dropItem"]);


Route::get('/register', [UserController::class, "create"]);

Route::post('/store', [UserController::class, "store"]);

Route::post('/logout', [UserController::class, "logout"]);

Route::get('/login', [UserController::class, "login"]);

Route::post('/authenticate', [UserController::class, "authenticate"]);
// Route::get('/deleted', [BooksController::class, "deletedItems"]);
// show deleted books page
Route::get('/manage-deleted', [BooksController::class, "showDeleted"]);
// delete deleted books page forever
Route::delete('/deleteForEver/{id}', [BooksController::class, "forceDelete"]);

// restore deleted books page 
Route::get('/restoreitem/{id}', [BooksController::class, "restoreItem"]);

// show admin dashboard
Route::get('/admin', [AdminController::class, "index"]);

// view requests to become author
Route::get('/applications', [AuthorController::class, "create"]);

// show author dashboard
Route::get('/auth-index', [AuthorController::class, "index"]);


// show edit-auth-info form
Route::get('/edit-auth-info', [AuthorController::class, "createEdit"]);
//  edit-auth-info form
Route::post('/edit-auth-form', [AuthorController::class, "updateAuthInfo"]);


// show become author form
Route::get('/become-author', [UserController::class, "applyFrom"]);
// submit become author form
Route::post('/joinus', [UserController::class, "joinUs"]);


// assign-new-author
Route::get('/assign-new-author/{id}', [AuthorController::class, "store"]);
