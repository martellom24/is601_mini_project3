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
    return view('index');
});

Route::get('/users', 'PagesController@users')->name('users');
Route::get('/about', 'PagesController@about')->name('about');
Route::get('/faqs', 'PagesController@faqs')->name('faqs');
Route::get('/library', 'PagesController@library')->name('library');

Route::get('/user/{user_id}/profile/{profile_id}', 'ProfileController@show')->name('profile.show');

Route::get('/subscription', 'PagesController@subscription')->name('subscription');
Route::get('/subscribers', 'PagesController@subscribers')->name('subscribers');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resources([
    'question' => 'QuestionController',
]);