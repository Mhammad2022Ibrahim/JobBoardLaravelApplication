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

    }

    public function destroy(){
        Auth::logout();
        return redirect('/')->with('success', 'Goodbye!');
    }

}
