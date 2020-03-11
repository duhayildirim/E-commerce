<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use App\Models\producttypeCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class producttypeController extends Controller
{
    public function create()
    {
        return view('CMS.news.create_product');
    }

    public function edit()
    {

        $element6 = producttypeCategory::all();
        View::share('element6', $element6);

        return view('CMS.edit.edit_product');
    }

    public function delete($id)
    {
        $producttypeDelete = producttypeCategory::find($id);
        $producttypeDelete -> delete();
        return redirect() -> route('CMS.edit.edit_producttype');
    }

    public function create_producttype(Request $request)
    {
        $request -> validate([
            "title" => "required",
        ]);
        $producttype = new producttypeCategory();
        $producttype->title = $request->title;

        $producttype->saveOrFail();

        return redirect()->route('CMS.producttype.create');
    }
}
