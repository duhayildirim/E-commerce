<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use App\Models\colorCategory;
use App\Models\ColorProducts;
use App\Models\productCategory;
use App\Models\producttypeCategory;
use App\Models\sizeCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\View;

class newsController extends Controller
{
    public function create()
    {

        $element = producttypeCategory::all();
        View::share('element', $element);

        $element2 = sizeCategory::all();
        View::share('element2', $element2);

        $element3 = colorCategory::all();
        View::share('element3', $element3);

        return view('CMS.news.create');
    }

    public function edit()
    {
//        $a = productCategory::orderBy('id','desc')->with(['colors.color','sizeidrelation','producttypeidrelation'])->get()->toarray();
                                                                                                            //ya da   first()

        //ya da

//        $b = productCategory::orderBy('id','desc')->first();
//        dd($b);

        $element7 = productCategory::all();
        View::share('element7', $element7);

        return view('CMS.edit.edit');

    }

    public function store(Request $request)
    {
        $request->validate([
            "gender" => "required",
            "producttypeid" => "required",
            "colorids" => "required|array",
            "colorids.*" => "required|distinct",
            "sizeid" => "required",
            "price" => "required",
            "name" => "required",
            "img_url" => "required",
            "explanation" => "required",
        ]);

        $productCategoryModel = new productCategory();
        $productCategoryModel->fill($request->all());

        if($request->hasFile('image')){
            $file = $request->file('image');
            $extensions = $file->getClientOriginalExtension();
            $image_path="file/".uniqid().time().'.'.$extensions;
            Storage::disk('public')->put($image_path, file_get_contents($file->path()));
            $productCategoryModel->img_url=$image_path;
        }

        $productCategoryModel->save();

        foreach ($request->colorids as $key_colorid => $colorid){
            $productColor = new ColorProducts();
            $productColor->color_category_id =$colorid;
            $productColor->product_id =$productCategoryModel->id;
            $productColor->save();
        }

        return redirect()->route('CMS.news.create');

    }

    public function delete($id)
    {
        $productdelete=productCategory::findOrFail($id);
        ColorProducts::where('product_id' , $productdelete -> id)->delete();
        $productdelete->delete();

        return redirect()->route('CMS.edit.edit');
    }

}
