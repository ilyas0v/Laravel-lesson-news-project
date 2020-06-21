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


Route::get('/',    'Frontend\PageController@home')->name('front.home');

Route::get('/news/{id}',            'Frontend\PageController@news_detail')->name('front.news.detail');

Route::post('/news/{id}/comment',   'Frontend\PageController@add_comment')->name('front.comment.add');

Route::get('/search',               'Frontend\PageController@search')->name('front.search');


// Route::get('/admin/news', 'NewsController@index');
// Route::get('/admin/news/create', 'NewsController@create');


//Auth::routes();

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout',   'Auth\LoginController@logout')->name('logout');

