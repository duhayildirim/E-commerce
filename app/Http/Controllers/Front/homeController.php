<?php

namespace App\Http\Controllers\Front;

use App\colorProducts;
use App\Http\Controllers\Controller;
use App\Models\Front\basketCategory;
use App\Models\productCategory;
use App\Models\producttypeCategory;
use App\Models\sizeCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class homeController extends Controller
{
    public function __construct() { // hepsinden önce çalışır bir daha ayrı ayrı fonksiyonlar yazmana gerek yok
        $typecategory = producttypeCategory::all();
        View::share('typecategory' , $typecategory);

        $sizecategory = sizeCategory::all();
        View::share('sizecategory' , $sizecategory);
    }

    public function index()
    {
        return view('Front.Home.index');
    }

    public function woman()
    {
//        $colorproducts = colorProducts::where('product_id',49)->get();
//        foreach ($colorproducts as $colorproduct){
//            dd($colorproduct->Color->title,$colorproduct->Product->name);
//        }

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
    public function basket()
    {
        return view('Front.Home.basket');
    }
    public function pay()
    {
        return view('Front.Home.pay');
    }
    public function contact()
    {
        return view('Front.Home.contact');
    }
    public function login()
    {
        return view('Front.Home.login');
    }
    public function register()
    {
        return view('Front.Home.register');
    }
}
