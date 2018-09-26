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
    return view('layouts.guest');
});
Route::get('about', function () {
    return view('layouts.about');
});
Route::get('guest', function () {
    return view('layouts.guest');
});
Route::get('gallery', function () {
    return view('layouts.gallery');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['prefix'=>'admin', 'middleware'=>['auth']], function () {
    Route::resource('barang', 'BarangController');
    Route::resource('kategori', 'KategoriController');
    Route::resource('galeri', 'GaleriController');
});
Route::get('blog','FrontController@blog');
Route::get('blog/{id}', array('as' => 'singleblog', 'uses' =>'FrontController@singleblog'));


Route::resource('index','FrontendController');
Route::get('/guest','FrontendController@barang')->name('barang');