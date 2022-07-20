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

Route::get('/', 'App\Http\Controllers\HomepageController@index')->name('homepage');

Route::get('/register', 'App\Http\Controllers\RegisterController@register_form')->name('register');
Route::post('/register', 'App\Http\Controllers\RegisterController@create')->name('registration');
Route::get('register/email/{q}', 'App\Http\Controllers\RegisterController@checkEmail');
Route::get('register/username/{q}', 'App\Http\Controllers\RegisterController@checkUsername');

Route::get("/login", "App\Http\Controllers\LoginController@login")->name("login");
Route::get("/logout", "App\Http\Controllers\LoginController@logout")->name("logout");
Route::post("/login", "App\Http\Controllers\LoginController@checkLogin")->name("reglogin");

Route::get('/home', "App\Http\Controllers\HomeController@index")->name('home');

Route::get('/column', "App\Http\Controllers\ColumnController@index")->name('column');
Route::get('/column/articles', "App\Http\Controllers\ColumnController@showAll");
Route::get('/column/article/{q}', "App\Http\Controllers\ColumnController@showArticle");

Route::get('/columnlogin', "App\Http\Controllers\ColumnLoginController@index")->name('columnlogin');
Route::get('/columnlogin/articles', "App\Http\Controllers\ColumnLoginController@showAll");
Route::get('/columnlogin/article/{q}', "App\Http\Controllers\ColumnLoginController@showArticle");

Route::get('/mybooks', "App\Http\Controllers\MyBooksController@index")->name('mybooks');
Route::get('/mybooks/titolo/{q}', "App\Http\Controllers\MyBooksController@search");
Route::get('/mybooks/aggiungi', "App\Http\Controllers\MyBooksController@addBook");
Route::get('/mybooks/visualizza', "App\Http\Controllers\MyBooksController@showBooks");
Route::get('/mybooks/elimina', "App\Http\Controllers\MyBooksController@deleteBook");

Route::get('/recensioni', "App\Http\Controllers\RecensioniController@index")->name('recensioni');
Route::post('/recensioni/createPost', "App\Http\Controllers\RecensioniController@createPost")->name('createPost');
Route::get('/recensioni/visualizza', "App\Http\Controllers\RecensioniController@showReviews");
Route::get('/recensioni/elimina/{q}', "App\Http\Controllers\RecensioniController@deleteReview");

Route::get('/libroperfetto', "App\Http\Controllers\LibroPerfettoController@index")->name('libroperfetto');
Route::get('/libroperfetto/risultati/{q}', "App\Http\Controllers\LibroPerfettoController@showResults");
