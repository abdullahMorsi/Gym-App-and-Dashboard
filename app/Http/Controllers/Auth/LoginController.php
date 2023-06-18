<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function create(){
        return view('loginpage');
    }

    public function store(Request $request)
    {
        $credentials = $request->validate([
            'name' => ['required'],
            'password' => ['required'],
        ]);
        if (Auth::attempt($credentials)) {

            $request->session()->regenerate();

            return redirect('/');
        }
        return back()->withErrors([
            'username' => 'The provided credentials do not match our records.',
        ]);
    }

    public function destroy(){
        Auth::logout();
        return redirect('/register');
    }
}
