<?php

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/about-us', "TestController@index")->name('about');

Route::group(['prefix'=>"account"], function () {
    Route::get('/register', "TestController@register");
    Route::get('/login', "TestController@login");
});

Route::get('/product', "TestController@product")->name('product');

Route::get('/test/create', "TestController@create");
Route::post('/test/store', "TestController@store")->name('test.store');

//Posts

Route::get('posts/store', "PostController@store");
Route::get('posts',"PostController@index");
Route::get('post/{id}',"PostController@show");


Route::get('post/update/{id}',"PostController@update");

Route::get('post/delete/{id}',"PostController@destroy");

Route::get('/show',"PostController@getPost");

