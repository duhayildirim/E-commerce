<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class membershipController extends Controller
{
    public function create()
    {
        return view('CMS.news.membership');
    }
}
