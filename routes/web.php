<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
    return view('layouts/frontend/home');
});
// Route::get('posts/{post}/comments/{comment}', function($postId, $commentId){
//     return "post: $postId - comment: $commentId";
// });

// Route::get('user/{id}', function($id = null){
//     return $id;
// })->middleware('checkAge', 'checkName');
Route::get('product/{id}','ProductController@show');
Route::get('brand/{id}','BrandController@show');


Route::group(['middleware'=> 'CheckAdmin','prefix' => 'admin'], function() {
    Route::get('/', function () {
        return view('layouts.admin');

    })->name('index');
    Route::resource('products', 'ProductController');
    Route::resource('brands', 'BrandController');
    Route::resource('categories', 'CategoryController');
    Route::resource('users', 'UserController');
    Route::resource('order_details', 'OrderDetailController');
    Route::resource('orders', 'OrderController');
    Route::resource('bill', 'AdminBillController');


});


Route::group(['prefix'=>'cart'],function(){
Route::get('add/{id}','CartController@getAddCart');
Route::get('show','CartController@getShowCart');
Route::get('delete/{id}','CartController@getDeleteCart');
Route::get('update','CartController@getUpdateCart');
Route::post('show','CartController@postComplete');
});
Route::get('complete', 'CartController@getComplete');


Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/errors', 'HomeController@errors')->name('errors');
Route::get('/logout', 'HomeController@logout')->name('logout');
Route::get('/logout', 'HomeController@logout')->name('logout');

