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
        $contact = Contact::all();
        View::share('contact',$contact);

        return view('CMS.news.contact');
    }

    public function delete($id)
    {
        $delete = Contact::find($id);
        $delete -> delete();

        return redirect()->route('CMS.create_contact');
    }
}
