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

Route::group(['prefix' => 'admin' , 'middleware' => 'auth'], function(){

    Route::get('/',  'DashboardController@index');
    Route::resource('/news',          'NewsController');
    Route::resource('/news_category', 'NewsCategoryController');

});


Route::get('/', function(){
    return 'ANA SEHIFE';
});




// Route::get('/admin/news', 'NewsController@index');
// Route::get('/admin/news/create', 'NewsController@create');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
