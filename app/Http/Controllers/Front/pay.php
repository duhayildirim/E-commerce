<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Front\basketCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;


class pay extends Controller
{
    public function pay()
    {
        $pay = basketCategory::all();
        View::share('pay' , $pay);

        return view('Front.Home.pay');
    }
}
