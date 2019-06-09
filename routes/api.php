<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
// categoris
Route::post('/cat/create', 'CatController@create');
Route::post('/cat/get', 'CatController@get');
Route::post('/cat/list', 'CatController@list');
Route::post('/cat/update', 'CatController@update');
Route::post('/cat/delete', 'CatController@delete');
Route::post('/cat/getcatproducts', 'CatController@getCatProducts');
//products
Route::post('/product/create', 'ProductController@create');
Route::post('/product/get', 'ProductController@get');
Route::post('/product/list', 'ProductController@list');
Route::post('/product/update', 'ProductController@update');
Route::post('/product/delete', 'ProductController@delete');
