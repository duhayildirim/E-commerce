<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\colorCategory;
use Illuminate\Support\Facades\View;

class colorController extends Controller
{
    public function create()
    {
        return view('CMS.news.create_color');
    }

    public function edit()
    {
        $element4 = colorCategory::all();
        View::share('element4', $element4);

        return view('CMS.edit.edit_color');
    }

    public function delete($id)
    {
        $colorDelete = colorCategory::find($id);
        $colorDelete -> delete();

        return redirect() -> route('CMS.edit.edit_color');
    }

    public function create_color(Request $request)
    {
        $request -> validate([
            "title"=>"required",
        ]);
        $color=new colorCategory();
        $color->title=$request->input('title');

        $color->save();

        return redirect()->route('CMS.color.create');
    }
}
