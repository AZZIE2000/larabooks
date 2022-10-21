<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\User;
use App\Models\Author;
use App\Models\Authorreq;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    // show author dashboard
    public function index()
    {
        return view('author.index-author', ['author' => Author::where('user_id', '=', auth()->user()->id)->first()]);
    }



    // show add new author form
    public function create()
    {
        return view('admin.applications', ['requests' => Authorreq::all()]);
    }
    // add new author
    public function store($id)
    {
        $theApp = Authorreq::find($id);
        // dd($theApp);
        $Author = new Author;
        $Author->bio = $theApp->bio;
        $Author->country = $theApp->country;
        $Author->age = $theApp->age;
        $Author->gender = $theApp->gender;
        $Author->phone = $theApp->phone;
        $Author->image = $theApp->image;
        $Author->user_id = $theApp->user_id;
        $Author->save();

        Authorreq::where('id', $id)->delete();
        User::where('id', $theApp->user_id)->update(['role' => 'author']);

        return redirect("/applications");
    }

    // show edit author form
    public function createEdit()
    {
        return view('author.edit-author', ['author' => Author::where('user_id', '=', auth()->user()->id)->first()]);
    }
    //  edit author 
    public function updateAuthInfo(Request $request)
    {   

        // dd(auth()->user()->author['image']);
        // dd($request['image']);
        $formFields = $request->validate([
            "bio" => "required",
            "country" => "required",
            "age" => "required",
            "phone" => "required",
            "gender" => "required",

        ]);

        if ($request->hasFile('image')) {

            $formFields['image'] = $request->file('image')->store('authorsimages', 'public');

            if (auth()->user()->author['image'] == null) {
                dd(auth()->user()->author['image']);
                $path = public_path() . '/storage/';

                // //code for remove old file

                $file_old = $path . $formFields['image'];
                // unlink($file_old);

                unlink($file_old);
            }
        } else {
            $plzWork = true;
        }
        // dd(@request('user_id'));
        Author::where('id', @request('author_id'))->update($formFields);
        User::where('id', @request('user_id'))->update(['name' => $request->name]);
        return  redirect('/auth-index');
    }
}
