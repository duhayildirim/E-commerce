<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class register extends Controller
{
    public function register()
    {
        return view('Front.Home.register');
    }
}
