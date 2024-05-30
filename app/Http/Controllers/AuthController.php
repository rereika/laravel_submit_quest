<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showSigninPage()
    {
        return view('auth.signin');
    }

    public function showSignupPage()
    {
        return view('auth.signup');
    }

    public function createArticle(){
        return view('conduit.editor');
    }
}
