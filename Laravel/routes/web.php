<?php
route::get('/','StaticPagesController@home')->name('home');
route::get('/help','StaticPagesController@help')->name('help');
route::get('/about','StaticPagesController@about')->name('about');
route::get('/signup','UsersController@signup')->name('signup');
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

/*Route::get('/', function () {
    return view('welcome');
});*/
