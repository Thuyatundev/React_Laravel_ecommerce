<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    // admin login blade
    public function login()
    {
        return view('admin.login');
    }

    // admin logout
    public function logout()
    {
        auth()->guard('admin')->logout();
        return redirect('/');
    }

    // admin login post
    public function adminlogin()
    {
        request()->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $cre = request()->only('email', 'password');

        if (auth()->guard('admin')->attempt($cre)) {
            return redirect('/admin')->with('success','Welcome To Dashboard');
        }
        return redirect()->back()->with('error', 'Email Or Password is incorrect');
    }

    // admin dashboard blade
    public function dashboard()
    {
        return view('admin.dashboard');
    }
}
