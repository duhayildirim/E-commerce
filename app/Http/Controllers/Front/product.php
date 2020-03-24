<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\productCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class product extends Controller
{
    public function __construct()
    {
        $new = productCategory::whereBetween('price' , [100, 1000]) -> get();
        View::share('new' , $new);
    }

    public function product($id)
    {
        $product = productCategory::findOrFail($id);
        View::share('product', $product);

        return view('Front.Home.product');
    }
}
