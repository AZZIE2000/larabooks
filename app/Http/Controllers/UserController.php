<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Authorreq;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\Request as ModelsRequest;

class UserController extends Controller
{
    // create register form
    public function create()
    {
        return view('register');
    }
    // register user
    public function Store(Request $request)
    {
        $formFields = $request->validate([
            "name" => ['required', 'min:3'],
            "email" => ['required', 'email', Rule::unique('users', 'email')],
            "password" => ['required', 'Confirmed', 'min:6'],
        ]);
        // hash pass
        $formFields['password'] = bcrypt($formFields['password']);

        $user = User::create($formFields);
        auth()->login($user);
        return redirect('/');
    }
    // logout user
    public function logout(Request $request)
    {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
    // show login form
    public function login()
    {
        return view('login');
    }
    // login user
    public function authenticate(Request $request)
    {
        $formFields = $request->validate([
            "email" => ['required', 'email'],
            "password" => 'required'
        ]);
        if (auth()->attempt($formFields)) {
            $request->session()->regenerate();
            return redirect('/');
        }
        return back()->withErrors(['email', 'Invalid Credentials'])->onlyInput('email');
    }
    public function applyFrom()
    {
        return view('/user.become-author', ['apps' => Authorreq::where('user_id', auth()->user()->id)]);
    }
    // submit become author form
    public function joinUs(Request $request)
    {

        $formFields = $request->validate([
            "bio" => "required",
            "country" => "required",
            "age" => "required",
            "phone" => "required",
            "gender" => "required",
            "user_id" => "required",
        ]);

        if ($request->hasFile('image')) {
            $formFields['image'] = $request->file('image')->store('authorsimages', 'public');
        }

        Authorreq::create($formFields);
        return redirect("/");
    }
}
