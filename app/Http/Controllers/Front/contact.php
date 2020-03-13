<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class contact extends Controller
{
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
