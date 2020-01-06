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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/user',[
//     'uses'=>'UserController@getUser'
// ]);

Route::get('/', 'PagesController@homepage');

// Route::get('/about', 'PagesController@aboutpage');
Route::get('/aboutme', [
                 'uses'=>'PagesController@aboutpage','as'=>'aboutme']);
Route::get('/contact', [
    'uses'=>'PagesController@contactpage','as'=>'contact']);

Route::get('/skill', [
    'uses'=>'PagesController@skillpage','as'=>'skill']);

Route::get('/admin', [
    'uses'=>'PagesController@adminpage','as'=>'admin']);

Route::resource('posts', 'PostsController');
