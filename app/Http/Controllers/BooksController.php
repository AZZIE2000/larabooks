<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Gate;

class BooksController extends Controller
{
    public function index()
    {
        if (request('sort') == 'des') {
            return view('index', ["books" => Book::orderBy('updated_at', 'DESC')->get(), "author" => Author::class]);
        }

        return view('index', ["books" => Book::filter(request(['search']))->get()]);
    }
    public function showDeleted()
    {
        return view('admin.manage-del-books', ["books" => Book::onlyTrashed()->get()]);
    }
    // Force delete book
    public function forceDelete()
    {
        Book::where('id', @request('id'))->forceDelete();

        return back();
    }
    // Restore a deleted book
    public function restoreItem()
    {
        Book::where('id', @request('id'))->restore();
        if (Book::onlyTrashed()->get()->count() == 0) {
            return redirect("/");
        } else {

            return back();
        }
    }

    public function show()
    {
        return view('show', ["book" => Book::find(@request("id"))]);
    }
    public function create(User $user)
    {
        if (Gate::authorize('isManager',  $user)) {

            return view('author.create');
        }
        // dd('add');
        // dd($request->all());
    }
    public function store(Request $request)
    {
        // dd($request->author_id);
        $formFields = $request->validate([
            "title" => "required",
            "country" => "required",
            "language" => "required",
            "pages" => "required",
            "year" => "required",
            "author_id" => "required",
        ]);


        // dd($request->file('imageLink'));
        if ($request->hasFile('imageLink')) {
            $formFields['imageLink'] = $request->file('imageLink')->store('uploaded', 'public');
        }

        Book::create($formFields);
        return redirect("/auth-index");
        // dd($request->all());
    }

    public function dropItem(User $user)
    {
        $book = Book::find(@request("id"));
        // dd(auth()->user()->role);   
        if (auth()->user()->role == "user") {
            return abort(403, 'Unauthorized access!');
        } else if (auth()->user()->role == "admin") {
            $book->delete();
            return redirect('/');
        } else if (Gate::authorize('author-book', $book)) {

            $book->delete();
            return back();
        }
    }
    // show edit book form
    public function edit()
    {
        if (Gate::authorize('author-book', Book::find(@request('id')))) {

            return view('author.edit', ["book" => Book::find(@request('id'))]);
        }
    }
    // edit book form method
    public function update(Request $request)
    {
        $book = Book::find(@request('id'));
        if (Gate::authorize('author-book', $book)) {

            $formFields = $request->validate([
                "title" => "required",
                "country" => "required",
                "language" => "required",
                "pages" => "required",
                "year" => "required",
                "author_id" => "required",
            ]);
            if ($request->hasFile('imageLink')) {
                $formFields['imageLink'] = $request->file('imageLink')->store('uploaded', 'public');
            }
            Book::where('id', @request('id'))->update($formFields);
            return redirect('/auth-index');
        }
    }
}
