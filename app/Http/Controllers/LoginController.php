<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
    public function create()
    {
        return view(view: 'auth.login');
    }

    public function store(){
        // dd(request()->all());
        $attributes = request()->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // if (Auth::attempt($attributes)) {
        //     session()->regenerate();
        //     return redirect('/')->with('success', 'Welcome back!');
        // }

        if (Auth::attempt($attributes)) {
            session()->regenerate();
            // return redirect('/')->with('success', 'Welcome back!');
            return redirect('/jobs')->with('success', 'Welcome back!');
        }

        return back()->withErrors(['email' => 'Invalid credentials'])->onlyInput('email');

    }

    public function destroy(){
        Auth::logout();
        return redirect('/')->with('success', 'Goodbye!');
    }

}
