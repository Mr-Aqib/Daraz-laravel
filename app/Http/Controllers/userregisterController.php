<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

use function PHPUnit\Framework\returnSelf;

class userregisterController extends Controller
{
    public function Signup(Request $req)
    {
        $signupdata = $req->validate([
            "name" => ['required',],
            "phone_number" => ['required', 'min:13'],
            "email" => ['required', 'email'],
            "password" => ['required']
        ]);
        $signupdata['password'] = bcrypt($signupdata['password']);
        $user = User::create($signupdata);
        auth()->login($user);
        return redirect('/')->with('message', 'Login Succesfully' . auth()->user()->name);
    }
    public function logout(Request $req)
    {
        auth()->logout();
        $req->session()->invalidate();
        return redirect('/')->with('message', 'Hope to see you again');
    }
    public function login(Request $req)
    {
        $signupdata = $req->validate([

            "email" => ['required', 'email'],
            "password" => ['required']
        ]);
        if (auth()->attempt($signupdata)) {
            $req->session()->regenerateToken();
            return redirect('/')->with('message', 'login Sucessfully' . auth()->user()->name);
        } else {
            return back()->with('message', 'inavlid Credentials');
        }
    }
}
