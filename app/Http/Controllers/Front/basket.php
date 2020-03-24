<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Front\basketCategory;
use App\Models\productCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\View;

class basket extends Controller
{
    public function basket()
    {
        $basket = basketCategory::all();
        View::share('basket' , $basket);

        $new = productCategory::whereBetween('price' , [100, 1000]) -> get();
        View::share('new' , $new);

        return view('Front.Home.basket');
    }

    public function add_basket(Request $request)
    {
        $basket = new basketCategory();
        $basket -> fill($request -> all());

        $basket -> save();

        return Response::json([
            'message' => 'ok'
        ]);
    }

    public function basket_delete(Request $request)
    {
        $basket_delete = basketCategory::find($request -> id);

        $basket_delete ->delete();

        return Response::json([
            'message' => 'ok',

        ]);
    }
}
