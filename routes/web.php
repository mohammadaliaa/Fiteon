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
Route::get('locale/{locale}',function($locale){
Session::put('locale',$locale);
return redirect()->back();
});
Route::get('/', function () {
    $infos = \App\Info::all();
    return view('layouts.welcome', compact( 'infos'));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('articles', function () {
    $articles = \App\Article::paginate(10);
    $infos = \App\Info::all();
    return view('articles.articlesView',compact('articles','infos'));
});
Route::get('projects', function () {
    $projects = \App\Project::all();
    $infos = \App\Info::all();
    return view('projects.projectsView',compact('projects','infos'));
});
Route::get('services', function () {
    $services = \App\Service::all();
    $infos = \App\Info::all();
    return view('services.servicesView',compact('services','infos'));
});
Route::get('products', function () {
    $cats = \App\Cat::all();
    $products = \App\Product::all();
    $infos = \App\Info::all();
    return view('products.productsView', compact('cats', 'products','infos'));
});
Route::get('about', function () {
    $infos = \App\Info::all();
    return view('aboutusView', compact('infos'));
});
Route::get('contact', function () {
    $infos = \App\Info::all();
    return view('contactusView', compact( 'infos'));
});



// product
Route::resource('admin/products', 'ProductController')->middleware(['auth']);

// cats
Route::resource('admin/cats', 'CatController')->middleware(['auth']);
//article
Route::resource('admin/articles', 'ArticleController')->middleware(['auth']);
//project
Route::resource('admin/projects', 'ProjectController')->middleware(['auth']);
//service
Route::resource('admin/services', 'ServiceController')->middleware(['auth']);
//info
Route::resource('admin/infos', 'InfoController')->middleware(['auth']);

Route::get('cats/{cat_id}', 'CatController@show');
Route::get('products/show/{product_id}', 'ProductController@show');
Route::get('articles/show/{article_id}', 'ArticleController@show');
Route::get('projects/show/{project_id}', 'ProjectController@show');
Route::get('services/show/{service_id}', 'ServiceController@show');

