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
    return view('layouts.master');
});


Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('admin.master');
    });

    Route::get('/logo', 'LogoController@index');
    Route::post('logo/update', 'LogoController@update');

    Route::get('/banner', 'BannerController@index');
    Route::post('banner/update', 'BannerController@update');

    Route::get('/banner-child', 'BannerChildController@index');
    Route::post('banner-child/update', 'BannerChildController@update');

    Route::get('/intro', 'IntroController@index');
    Route::post('intro/update', 'IntroController@update');

    Route::get('menu', 'MenuController@index');
    Route::post('menu/update', 'MenuController@update');
    Route::get('menu/create', 'MenuController@create');
    Route::post('menu/create_menu', 'MenuController@create_menu');
    Route::get('menu/{id}', 'MenuController@edit');
    Route::post('menu/edit', 'MenuController@save_edit');

    Route::get('post','PostController@index');
    Route::get('post/create','PostController@create');
    Route::post('post/create_post','PostController@create_post');
    Route::post('post/delete','PostController@delete');
    Route::get('post/{id}','PostController@edit');
    Route::post('post/edit','PostController@save_edit');
    //Post Category
    Route::get('post_category','PostCategoryController@index');
    Route::get('post_category/create','PostCategoryController@create');
    Route::post('post_category/create_post_category','PostCategoryController@create_post_category');
    Route::post('post_category/delete','PostCategoryController@delete');
    Route::get('post_category/{id}','PostCategoryController@edit');
    Route::post('post_category/edit','PostCategoryController@save_edit');
});