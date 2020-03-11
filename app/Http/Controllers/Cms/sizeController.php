<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\sizeCategory;
use Illuminate\Support\Facades\View;

class sizeController extends Controller
{
    public function create()
    {
        return view('CMS.news.create_size');
    }

    public function edit()
    {
        $element5 = sizeCategory::all();
        View::share('element5', $element5);

        return view('CMS.edit.edit_size');
    }

    public function delete($id)
    {
        $sizeDelete = sizeCategory::find($id);
        $sizeDelete -> delete();

        return redirect() -> route('CMS.edit.edit_size');
    }

    public function create_size(Request $request)
    {
        $request->validate([
            "title"=>"required",
        ]);

        $size=new sizeCategory();
        $size->title=$request->input('title');

        $size->save();

        return redirect()->route('CMS.size.create');
    }
}
