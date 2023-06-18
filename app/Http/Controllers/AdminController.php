<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function create(){
        return view('admin.login');
    }
    public function store(Request $request)
    {
        $credentials = $request->validate([
            'name' => ['required'],
            'password' => ['required'],
        ]);
        if (Auth::attempt($credentials)) {

            $request->session()->regenerate();
//            dd("test");
            return redirect('/admin');
        }
        return back()->withErrors([
            'username' => 'The provided credentials do not match our records.',
        ]);
    }

    public function destroy(){
        Auth::logout();
        return redirect('/admin/login');
    }

}
