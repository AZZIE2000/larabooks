<?php

namespace App\Http\Controllers;

use App\Models\books;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class BooksController extends Controller
{
    public function index()
    {
        return view('index', ["books" => books::all()]);
    }

    public function show()
    {
        return view('show', ["book" => books::find(@request("id"))]);
    }
    public function create()
    {
        return view('create');
        // dd('add');
        // dd($request->all());
    }
    public function store(Request $request)
    {
        $formFields = $request->validate([
            "title" => "required",
            "author" => "required",
            "country" => "required",
            "language" => "required",
            "pages" => "required",
            "year" => "required",
        ]);

        // dd($request->file('imageLink'));
        if ($request->hasFile('imageLink')) {
            $formFields['imageLink'] = $request->file('imageLink')->store('uploaded', 'public');
        }

        books::create($formFields);
        return redirect("/");
        // dd($request->all());
    }

    public function dropItem()
    {
        $book = books::find(@request("id"));
        $book->delete();
        return redirect("/");
    }
    public function edit()
    {
        return view('edit', ["book" => books::find(@request('id'))]);
    }
    public function update(Request $request)
    {

        $formFields = $request->validate([
            "title" => "required",
            "author" => "required",
            "country" => "required",
            "language" => "required",
            "pages" => "required",
            "year" => "required",

        ]);
        if ($request->hasFile('imageLink')) {
            $formFields['imageLink'] = $request->file('imageLink')->store('uploaded', 'public');
        }
        books::where('id', @request('id'))->update($formFields);
        return redirect('/');
        // dd($request->all());
    }
}
