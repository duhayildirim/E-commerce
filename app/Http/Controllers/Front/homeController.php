<?php

namespace App\Http\Controllers\Front;

use App\colorProducts;
use App\Http\Controllers\Controller;
use App\Models\Front\basketCategory;
use App\Models\productCategory;
use App\Models\producttypeCategory;
use App\Models\sizeCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\View;

class homeController extends Controller
{
    public function __construct() {

        $typecategory = producttypeCategory::all();
        View::share('typecategory' , $typecategory);

        $sizecategory = sizeCategory::all();
        View::share('sizecategory' , $sizecategory);

        $show = productCategory::all();
        View::share('show' , $show);

        $new = productCategory::whereBetween('price' , [100, 1000]) -> get();
        View::share('new' , $new);
    }

    public function index()
    {
        return view('Front.Home.index');
    }

    public function woman()
    {
        $products = productCategory::where('gender','Kadin')->get();
        View::share('products' , $products);

        return view('Front.Home.woman');
    }
    public function gentleman()
    {
        $products = productCategory::where('gender','Erkek')->get();
        View::share('products' , $products);

        return view('Front.Home.gentleman');
    }
}
