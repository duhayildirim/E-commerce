<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class login extends Controller
{
    public function login()
    {
        return view('Front.Home.login');
    }
}
