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
Route::resource('admin/articles', 'ArticleController');
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
Route::get('about', function () {
    return view('aboutusView');
});
Route::get('contact', function () {
    return view('contactusView');
});
Route::get('/projects', function () {
    return view('projectsView');
});
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
Route::post('product', 'ProductController@create')->name('product.create');
// Route::get('product', 'ProductController@list')->name('product.list');
Route::get('/products', 'ProductController@list');

// Route::get('/products', function () {
//     return view('productsView');
// });
Route::get('/page', function () {
    return view('page');
});

Route::get('admin/products/create', function () {
    return view('admin.createproduct');
});

Route::delete('/products','productController@destroy')->name('products.destroy');
// end product

// cats
Route::post('cat', 'CatController@create')->name('cat.create');
Route::get('admin/cats', 'CatController@list')->name('cat.list');
Route::get('admin/cats/create', function () {
    return view('admin.createcat');
});
// end cat


//article

//end article

