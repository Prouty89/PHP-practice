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

//Replace regular routes to be controlled with controller


 Route::get('/', 'PagesController@index');
 Route::get('/about', 'PagesController@about');
 Route::get('/services', 'PagesController@services');

// Route::get('/about', function () {
//     return view('pages.about');
// });


// dynamic url
// Route::get('/uers/{id}', function ($id) {
//     return 'This is user '.$id;
// });

// dynamic url
// Route::get('/uers/{id}/{name}', function ($id) {
//     return 'This is user '.$name ' with an id '.$id;
// });
