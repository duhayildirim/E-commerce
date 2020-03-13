<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use App\Models\Front\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class contactController extends Controller
{
    public function create()
    {
        return view('CMS.news.contact');
    }

    public function show()
    {
        $contact = Contact::all();
        View::share('contact',$contact);

        return view('CMS.news.contact');
    }
}
