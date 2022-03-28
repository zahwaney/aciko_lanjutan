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
Route::get('/master', function () {
    return view('layout.master');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/landingpage','AnggotaController@index');

Route::get('/forum','ForumController@index');
Route::get('/forum/create', 'ForumController@create')->name('forum.create');
Route::post('/forum', 'ForumController@store')->name('forum.store');
Route::post('/forum/delete/{id}', 'ForumController@destroy')->name('forum.destroy');
Route::post('/forum/edit/{id}', 'ForumController@edit')->name('forum.edit');
Route::post('/forum/update/{id}', 'ForumController@update')->name('forum.update');

Route::get('/forum/likefoto/{id}', 'ForumController@likefoto')->name('like.foto');
Route::get('/komentar', 'KomentarController@index')->name('forum.komentar');
Route::post('/detail_forum/{id}', 'KomentarController@komentar')->name('komentar.store');
Route::get('/detail_forum/{id}', 'ForumController@detail_forum')->name('forum.detail_forum');
