<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function create()
    {
        return view('login.register');
    }

    public function index()
    {
        return view('login.login');
    }

    public function login(Request $request)
    {
        $credential = $request->only('email','password');
        // dd($credential);

        if(Auth::attempt($credential))
        {
            //login sucess
            $request->session()->regenerate();
            return redirect('/book');
        }

        return back()->withErrors([
            'email' => 'email is incorrect',
            'password' => 'password is incorrect'
        ])->withInput();
    }

    public function destroy(Request $request)
    {
        //logout function 
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/home');
    }

}
