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
    return view('main');
})->name('main');





//navigation routing
Route::get('/login','Navigation@viewLogin')->name('login');
Route::get('/register','Navigation@viewRegister')->name('register');


//registering user
Route::post('/register_request','Register@register')->name('register_request');


//login users
Route::get('login_request','Login@login')->name('login-request');


//viewing add form
Route::get('/create_your_add/create','AdsControl@viewAdForm')->name('create_ad');


//adding ads
Route::post('/create_your_add','AdsControl@storeAd')->name('store_ad');


//return categories view
Route::get('/categories','Categories@viewCategories')->name('categories');


//return mobiles 
Route::get('/mobiles','MobileController@viewMobiles')->name('mobiles');

//search implementation
Route::get('/search_ads','MobileController@searchMobiles')->name('search_ads');


//returning one element from db

Route::get('/search_ads/{id}','SingleView@viewSingle')->name('view_single');



//test controller route
Route::resource('/test','test');




