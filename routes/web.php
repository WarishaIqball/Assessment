<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/clear-cache', function () {
    Artisan::call('route:cache');
    Artisan::call('config:cache');
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
    Artisan::call('view:clear');
    return "Cache cleared successfully";
});

    Route::group(['namespace' => 'App\Http\Controllers'], function () {

        Route::get('/', 'LoginController@index')->name('login');
        Route::post('/login/perform', 'LoginController@login')->name('login.perform');
        
        Route::get('register', 'RegisterController@index')->name('register');
        Route::post('/register', 'RegisterController@register')->name('register.perform');
        Route::post('logout', 'LoginController@logout')->name('logout');
        Route::group(['middleware' => ['auth']], function () {

            // Route::post('login/{provider}/callback', 'Auth\LoginController@handleCallback');
             
      
             Route::resource('posts', 'PostController');
             Route::get('posts/{post}', 'PostController@show')->name('posts.show');
             Route::get('posts/create', 'PostController@create')->name('posts.create');
             Route::post('posts', 'PostController@store')->name('posts.store');
             Route::get('posts/{post}/edit', 'PostController@edit')->name('posts.edit');
             Route::post('posts/{post}',  'PostController@update')->name('posts.update');
             Route::delete('posts/{post}',  'PostController@destroy')->name('posts.destroy');

         });
    });


   