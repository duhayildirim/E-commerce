 <?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/exit' , function () {\Illuminate\Support\Facades\Auth::logout();
    return redirect()->route('login');
})->name('log_out');

Route::get('/' , 'Front\homeController@index')->name('main');

Route::get('/woman' , 'Front\homeController@woman')->name('woman');

Route::get('/gentleman' , 'Front\homeController@gentleman')->name('gentleman');

Route::get('/basket' , 'Front\homeController@basket')->name('basket');

Route::get('/pay' , 'Front\homeController@pay')->name('pay');

Route::get('/contact' , 'Front\homeController@contact')->name('contact');

Route::get('/loginweb' , 'Front\homeController@login')->name('loginweb');

Route::get('/registerweb' , 'Front\homeController@register')->name('registerweb');

 Auth::routes();

 Route::group(['prefix' => 'panel' , 'middleware' => 'auth'], function () {

    Route::get('/' , function (){
        return view('CMS.home');})->name('CMS.home');

    Route::group(['prefix' => 'news'], function () {
        Route::get('/create' , 'CMS\newsController@create')->name('CMS.news.create');
        /*Route::post('/store' , function (\Illuminate\Http\Request $request){
            dd($request->all());
        })->name('CMS.news.store');*/
        Route::post('/store' , 'CMS\newsController@store')->name('CMS.news.store');
        Route::get('/edit' , 'CMS\newsController@edit')->name('CMS.edit.edit');
        Route::get('/delete/{id}' , 'CMS\newsController@delete')->name('CMS.edit.delete');
        Route::post('/delete_product' , 'CMS\newsController@edit_product')->name('CMS.edit.delete_product');
        Route::get('/edit_new/{id}' , 'CMS\editnewController@create')->name('CMS.edit.edit_new');
        Route::post('/edit_post/{id}' , 'CMS\editnewController@edit_post')->name('CMS.edit.edit_post');
    });

    Route::group(['prefix' => 'color'], function (){
        Route::get('/create' , 'CMS\colorController@create')->name('CMS.color.create');
        Route::post('/create_color', 'CMS\colorController@create_color')-> name('CMS.color.create_post');
        Route::get('/edit_color' , 'CMS\colorController@edit')->name('CMS.edit.edit_color');
        Route::get('/delete_color/{id}' , 'CMS\colorController@delete')->name('CMS.edit.delete_color');
    });

    Route::group(['prefix' => 'size'], function (){
        Route::get('/create' , 'CMS\sizeController@create')->name('CMS.size.create');
        Route::post('/create_size', 'CMS\sizeController@create_size')-> name('CMS.size.create_post');
        Route::get('/edit_size' , 'CMS\sizeController@edit')->name('CMS.edit.edit_size');
        Route::get('/delete_size/{id}' , 'CMS\sizeController@delete')->name('CMS.edit.delete_size');
    });

    Route::group(['prefix' => 'producttype'], function (){
        Route::get('/create' , 'CMS\producttypeController@create')->name('CMS.producttype.create');
        Route::post('/create_producttype', 'CMS\producttypeController@create_producttype')-> name('CMS.producttype.create_post');
        Route::get('/edit_producttype' , 'CMS\producttypeController@edit')->name('CMS.edit.edit_producttype');
        Route::get('/delete_producttype/{id}' , 'CMS\producttypeController@delete')->name('CMS.edit.delete_producttype');
    });

    Route::group(['prefix' => 'coupon'], function (){
        Route::get('/create' , 'Cms\couponController@create')->name('CMS.coupon.create');
        Route::post('/create_coupon' , 'Cms\couponController@create_coupon')->name('CMS.coupon.create_post');
        Route::get('/edit_coupon' , 'Cms\couponController@edit')->name('CMS.edit.edit_coupon');
        Route::get('/delete_coupon/{id}' , 'Cms\couponController@delete')->name('CMS.edit.delete_coupon');
    });

    Route::get('/create' , 'Cms\contactController@create')->name('CMS.create_contact');
    Route::get('/create_order' , 'Cms\orderController@create')->name('CMS.create_order');
    Route::get('/create_membership' , 'Cms\membershipController@create')->name('CMS.create_membership');
});