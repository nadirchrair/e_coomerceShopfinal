<?php

use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization ;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){ //...
Route::middleware(['auth', 'is_admin'])->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\Admin\AdminController::class,'index'])->name('dashboard');

    Route::resource('/categorie', App\Http\Controllers\Admin\CategoriesController::class);
   // Route::get('categorie/{category}', 'App\Http\Controllers\Admin\CategoriesController@show')->name('categorie.show');
   Route::resource('/products', App\Http\Controllers\Admin\ProductController::class);

    Route::get('/users', function () {
        return view('admin.users');
    });
});
Route::get('',[ App\Http\Controllers\WebsiteController::class , 'index']);
Route::get('/categoriall', [App\Http\Controllers\WebsiteController::class,'allcategories']);
Route::get('/categoriall/{slug}', [App\Http\Controllers\WebsiteController::class,'get_categorie']);

    });