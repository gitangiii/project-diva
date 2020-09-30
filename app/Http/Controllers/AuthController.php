<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function getLogin()
    {
        return view('login');
    }

    public function postLogin(Request $request)

    {
        dd('Login ok');
    }

    public function getRegister()
    {
        return view('register');
    }

    public function postRegister(Request $request)

    {
        dd('Registration ok');
    }

}
