<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use App\Models\coupon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class couponController extends Controller
{
    public function create(){
        return view('CMS.news.create_coupon');
    }

    public function create_coupon(Request $request){
        $request -> validate([
            'code' => 'required',
        ]);
        $coupon = new coupon();
        $coupon->code = $request -> input('code') ;
        $coupon->save();

        return redirect() -> route('CMS.coupon.create');
    }

    public function edit()
    {
        $new = coupon::all();
        View::share('new', $new);

        return view('CMS.edit.edit_coupon');

    }
    public function delete($id)
    {
        $delete = coupon::find($id);
        $delete -> delete();
        return redirect() -> route('CMS.edit.edit_coupon');
    }

}
