<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class wahyu extends Controller
{
    public function test(){
        return view("index");
    }

    public function index()
    {
        $adin= User::All();

        return view("wahyu", compact("adin"));
    }

    public function login(Request $request)
    {
        $model=new User;
        $model->username=$request->username;
        $model->password=$request->password;
        $model->save();
        return redirect('/index')->with(['success' => 'Pesan Berhasil']);
    }
}

