<?php

namespace App\Http\Controllers;
use App\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function getlogin()
    {
        return view('validation.login');
    }

    public function postlogin(Request $request)
    {
        dd(Auth::attempt([
            'username' => $request->username,
            'password' => $request->password
        ]));
    }

    public function getregis()
    {
        return view('validation.registrasi');
    }

    public function postregis(Request $request)
    {
        dd('regis berhasil');
    }
}
