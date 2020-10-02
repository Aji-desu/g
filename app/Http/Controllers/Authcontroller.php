<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Authcontroller extends Controller
{
    public function getlogin()
    {
        return view('login');
    }

    public function postlogin(Request $request)
    {
        dd('okey');
    }

    public function getRegister()
    {
        return view('register');
    }

    public function postregister(Request $request)
    {
        dd('okey');
    }
}
