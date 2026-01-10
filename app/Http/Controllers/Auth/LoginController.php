<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login()
    {
        $title = 'Login';

        return view('auth.login', compact('title'));
    }

    public function createSession() {}
}
