<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use App\Models\colorCategory;
use App\Models\ColorProducts;
use App\Models\productCategory;
use App\Models\producttypeCategory;
use App\Models\sizeCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\View;
use Symfony\Component\Console\Input\Input;

class editnewController extends Controller
{
    public function create($id)
    {
        $element = producttypeCategory::all();
        View::share('element' , $element);

        $element2 = sizeCategory::all();
        View::share('element2' , $element2);

        $element3 = colorCategory::all();
        View::share('element3' , $element3);

        $last = productCategory::find($id);
        View::share('last' , $last);

        return view('CMS.edit.edit_new');
    }

    public function edit_post(Request $request, $id)
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

//        $productCategoryModel = new productCategory();
//        $productCategoryModel->fill($request->all());
//
//        if($request->hasFile('image')){
//            $file = $request->file('image');
//            $extensions = $file->getClientOriginalExtension();
//            $image_path="file/".uniqid().time().'.'.$extensions;
//            Storage::disk('public')->put($image_path, file_get_contents($file->path()));
//            $productCategoryModel->img_url=$image_path;
//        }
//
//        $productCategoryModel->save();
//
//        foreach ($request->colorids as $key_colorid => $colorid){
//            $productColor = new ColorProducts();
//            $productColor->color_category_id =$colorid;
//            $productColor->product_id =$productCategoryModel->id;
//            $productColor->save();
//        }

        $news = productCategory::find($id);

        if (isset($news)) {

            $news->fill($request->all());


            ColorProducts::where('product_id' , $news -> id)->delete();


            foreach ($request->colorids as $key_colorid => $colorid){
                $productColor = new ColorProducts();
                $productColor->color_category_id =$colorid;
                $productColor->product_id =$news->id;
                $productColor->save();
            }
        }

        if($request->hasFile('image')){
                $file = $request->file('image');
                $extensions = $file->getClientOriginalExtension();
                $image_path="file/".uniqid().time().'.'.$extensions;
                Storage::disk('public')->put($image_path, file_get_contents($file->path()));
                $news->img_url=$image_path;
        }

        $news->save();




        return redirect()->route('CMS.edit.edit');

    }

}
