<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\productCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class search extends Controller
{
    public function search()
    {
        $search = request()->input('search');
        $s = productCategory::where('name' , 'like' , "%$search%")->orWhere('explanation' , 'like' ,"%$search%")->get();
        View::share('s' , $s);

        return view('Front.Home.search');
    }
}
