<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store(){
        // dd('todo');// for printing, testing
        // dd(request()->all());
        //validate
        $validatedAttributes = request()->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed|min:6'
        ]);

        //create user
        $user = User::create($validatedAttributes);

        //log in
        Auth::login($user);

        // redirect
        // return redirect('/')->with('success', 'Registration successful. Welcome aboard!');
        return redirect('/jobs')->with('success', 'Registration successful. Welcome aboard!');
    }
}
