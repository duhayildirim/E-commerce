<?php

Route::get('/exit', function () {
    \Illuminate\Support\Facades\Auth::logout();
    return redirect()->route('login');
})->name('log_out');

Auth::routes();

Route::group(['prefix' => 'panel', 'middleware' => 'auth'], function () {
//İçerik Yönetim Sistemi
    Route::get('/', function () { return view('CMS.home'); })->name('CMS.home');
    // yeni ürün
    Route::group(['prefix' => 'news', 'namespace' => 'Cms'], function () {
        Route::get('/create', 'newsController@create')->name('CMS.news.create');
        Route::post('/store', 'newsController@store')->name('CMS.news.store');
        Route::get('/edit', 'newsController@edit')->name('CMS.edit.edit');
        Route::get('/delete/{id}', 'newsController@delete')->name('CMS.edit.delete');
        Route::post('/delete_product', 'newsController@edit_product')->name('CMS.edit.delete_product');
        Route::get('/edit_new/{id}', 'editnewController@create')->name('CMS.edit.edit_new');
        Route::post('/edit_post/{id}', 'editnewController@edit_post')->name('CMS.edit.edit_post');
    });
    //renk
    Route::group(['prefix' => 'color' , 'namespace' => 'Cms'], function () {
        Route::get('/create', 'colorController@create')->name('CMS.color.create');
        Route::post('/create_color', 'colorController@create_color')->name('CMS.color.create_post');
        Route::get('/edit_color', 'colorController@edit')->name('CMS.edit.edit_color');
        Route::get('/delete_color/{id}', 'colorController@delete')->name('CMS.edit.delete_color');
    });
    //beden
    Route::group(['prefix' => 'size' ,'namespace' => 'Cms'], function () {
        Route::get('/create', 'sizeController@create')->name('CMS.size.create');
        Route::post('/create_size', 'sizeController@create_size')->name('CMS.size.create_post');
        Route::get('/edit_size', 'sizeController@edit')->name('CMS.edit.edit_size');
        Route::get('/delete_size/{id}', 'sizeController@delete')->name('CMS.edit.delete_size');
    });
    //ürün türü
    Route::group(['prefix' => 'producttype' ,'namespace' => 'Cms'], function () {
        Route::get('/create', 'producttypeController@create')->name('CMS.producttype.create');
        Route::post('/create_producttype', 'producttypeController@create_producttype')->name('CMS.producttype.create_post');
        Route::get('/edit_producttype', 'producttypeController@edit')->name('CMS.edit.edit_producttype');
        Route::get('/delete_producttype/{id}', 'producttypeController@delete')->name('CMS.edit.delete_producttype');
    });
    //indirim kuponu
    Route::group(['prefix' => 'coupon', 'namespace' => 'Cms'], function () {
        Route::get('/create', 'couponController@create')->name('CMS.coupon.create');
        Route::post('/create_coupon', 'couponController@create_coupon')->name('CMS.coupon.create_post');
        Route::get('/edit_coupon', 'couponController@edit')->name('CMS.edit.edit_coupon');
        Route::get('/delete_coupon/{id}', 'couponController@delete')->name('CMS.edit.delete_coupon');
    });
    //iletişim
    Route::get('/create', 'Cms\contactController@create')->name('CMS.create_contact');
    Route::get('/delete_store/{id}', 'Cms\contactController@delete')->name('contact_delete');
    //sipariş
    Route::get('/create_order', 'Cms\orderController@create')->name('CMS.create_order');
    //üyelik
    Route::get('/create_membership', 'Cms\membershipController@create')->name('CMS.create_membership');
});


//Web Front
    Route::get('/', 'Front\homeController@index')->name('main');
    Route::get('/woman', 'Front\homeController@woman')->name('woman');
    Route::get('/gentleman', 'Front\homeController@gentleman')->name('gentleman');
    //arama
    Route::post('/search' , 'Front\search@search')->name('search');
    //ürünler
    Route::get('/productweb/{id}', 'Front\product@product')->name('productweb');
    //sepet
    Route::get('/basket', 'Front\basket@basket')->name('basket');
    Route::get('/add_basket', 'Front\basket@add_basket')->name('add_basket');
    Route::get('/delete_basket' , 'Front\basket@basket_delete')->name('delete_basket');
    //iletişim
    Route::get('/contact', 'Front\contact@contact')->name('contact');
    Route::post('/contact_store', 'Front\contact@store')->name('contact_store');
    //ödeme
    Route::get('/pay', 'Front\pay@pay')->name('pay');
    //kayıt
    Route::get('/registerweb', 'Front\register@register')->name('registerweb');
    //giriş
    Route::get('/loginweb', 'Front\login@login')->name('loginweb');
