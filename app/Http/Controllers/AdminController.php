<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\User;
use App\Models\Author;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class AdminController extends Controller
{
    public function index(User $user)
    {
        if (Gate::authorize('isAdmin', $user)) {

            return view('admin.index', ['books' => Book::all(), 'authors' => Author::all(), 'users' => User::all()]);
        }
    }
}
