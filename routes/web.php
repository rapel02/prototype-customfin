<?php
use App\Http\Controllers\ProductController;

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
    return view('home');
});
Route::get('/home', function () {
    return view('home');
});

Auth::routes();

Route::get('/design', function() {
    return view('design');
});
Route::get('/testimony', function() {
    return view('testimony');
});

Route::get('/product', 'ProductController@index');
Route::get('/product/{slug}', 'ProductController@show');
Route::get('/product/{slug}/payment', 'ProductController@payment');
Route::get('/transaction', 'TransactionController@index');
