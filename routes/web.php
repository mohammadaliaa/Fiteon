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

// Route::resource('products','ProductController');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('admin/posts', function () {
    return view('admin.posts');
});
Route::get('articles', function () {
    return view('articlesView');
});
Route::get('services', function () {
    return view('servicesView');
});
Route::get('products', function () {
    return view('productsView');
});
Route::get('about', function () {
    return view('aboutusView');
});
Route::get('contact', function () {
    return view('contactusView');
});
// Route::get('/projects', function () {
//     return view('projectsView');
// });
Route::get('/page/{lang}', function ($lang) {
    App::setlocale($lang);
    return view('page');
});
Route::get('setlocale/{locale}',function($lang){
    \Session::put('locale',$lang);
    return redirect()->back();
});
Route::group(['middleware'=>'language'],function ()
{
    //your translation routes
});


// product
Route::resource('admin/products', 'ProductController');
// end product

// cats
Route::resource('admin/cats', 'CatController');
// end cat


//article
Route::resource('admin/articles', 'ArticleController');
//end article

//project
Route::resource('admin/projects', 'ProjectController');
//end project


Route::get('products', 'CatController@indexview');

