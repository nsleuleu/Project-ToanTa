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

Route::get('/', function () {
    return view('welcome');
});

Route::get('index',[
    'as'=>'trang-chu',
    'uses'=>'PageController@getIndex'
]);

Route::get('loai-san-pham/{type}',[
    'as'=>'loaisanpham',
    'uses'=>'PageController@getLoaiSp'
]);

Route::get('chi-tiet-san-pham/{id}',[
    'as'=>'chitietsanpham',
    'uses'=>'PageController@getChitiet'
]);

Route::get('lien-he',[
    'as'=>'lienhe',
    'uses'=>'PageController@getLienHe'
]);

Route::get('gioi-thieu',[
    'as'=>'gioithieu',
    'uses'=>'PageController@getGioiThieu'
]);

Route::get('add-to-cart/{id}',[
    'as'=>'themgiohang',
    'uses'=>'PageController@getAddtoCart'
]);

Route::get('del-cart/{id}',[
    'as'=>'xoagiohang',
    'uses'=>'PageController@getDelItemCart'
]);

Route::get('dat-hang',[
    'as'=>'dathang',
    'uses'=>'PageController@getCheckout'
]);

Route::post('dat-hang',[
    'as'=>'dathang',
    'uses'=>'PageController@postCheckout'
]);    

Route::get('dang-nhap',[
    'as'=>'login',
    'uses'=>'PageController@getLogin'
]);
Route::post('dang-nhap',[
    'as'=>'login',
    'uses'=>'PageController@postLogin'
]);

Route::get('dang-ki',[
    'as'=>'signin',
    'uses'=>'PageController@getSignin'
]);

Route::post('dang-ki',[
    'as'=>'signin',
    'uses'=>'PageController@postSignin'
]);

Route::get('dang-xuat',[
    'as'=>'logout',
    'uses'=>'PageController@postLogout'
]);

Route::get('search',[
    'as'=>'search',
    'uses'=>'PageController@getSearch'
]);

Route::group(['prefix'=>'admin'],function(){
    Route::group(['prefix'=>'products'],function(){
        Route::get('danhsach','ProductsController@getDanhSach');
        Route::get('sua','ProductsController@getSua');
        Route::get('them','ProductsController@getThem');
    });
    Route::group(['prefix'=>'customer'],function(){
        Route::get('danhsach','CustomerController@getDanhSach');
        Route::get('sua','CustomerController@getSua');
        Route::get('them','CustomerController@getThem');
    });
    Route::group(['prefix'=>'news'],function(){
        Route::get('danhsach','NewsController@getDanhSach');
        Route::get('sua','NewsController@getSua');
        Route::get('them','NewsController@getThem');
    });
    Route::group(['prefix'=>'slide'],function(){
        Route::get('danhsach','SlideController@getDanhSach');
        Route::get('sua','SlideController@getSua');
        Route::get('them','SlideController@getThem');
    });
    Route::group(['prefix'=>'user'],function(){
        Route::get('danhsach','UserController@getDanhSach');
        Route::get('sua','UserController@getSua');
        Route::get('them','UserController@getThem');
    });

});