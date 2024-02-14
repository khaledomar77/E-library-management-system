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

Route::get('/','PagesController@index')->name('index');

Route::get('/category/{id}','PagesController@viewCategory')->name('category');
Route::get('/book/{id}','PagesController@viewBook')->name('book');

Route::post('/comment/{id}',['uses'=>'PagesController@addComment','middleware'=>'auth'])->name('comment');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix'=>'admin','middleware'=>'roles','roles'=>'admins'],function(){
    Route::resource('users','AdminUsersController');
    Route::resource('categories','adminCreateController');
});
Route::get('/upload',['uses'=>'UploadController@index','middleware'=>'auth','roles'=>['admins','users']])->name('upload');
Route::post('/upload',['uses'=>'UploadController@upload','middleware'=>'auth','roles'=>['admins','users']])->name('upload.save');

Route::get('/category/{id}','PagesController@viewCategory')->name('category');
Route::get('/book/{id}','PagesController@viewBook')->name('book');