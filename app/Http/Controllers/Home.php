<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Home extends Controller
{
    public function index(Request $request)
    {
        $adin = \DB::table('user')->pluck('username');
        return view("page.laporan", compact("adin"));
    }
}
