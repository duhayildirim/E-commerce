<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\productCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class contact extends Controller
{
    public function contact()
    {
        $new = productCategory::whereBetween('price' , [100, 1000]) -> get();
        View::share('new' , $new);

        return view('Front.Home.contact');
    }

    public function store(Request $request)
    {
        $request -> validate([
            "name" => "required",
            "email" => "required",
            "subject" => "required",
            "message" => "required",
        ]);

        $contact = new \App\Models\Front\Contact();
        $contact->fill($request->all());

        $contact ->save();

        return redirect()->route("contact");

    }
}
