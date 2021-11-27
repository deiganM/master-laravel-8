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
  // this will return the welcome 'view'
    // return view('welcome');
    return 'Home page';
})->name('home.index');

// A named route
Route::get('/contact', function () {
  return 'Contact';
})->name('home.contact');

// Route parameters, using ->where() constrain parameters
Route::get('/posts/{id}', function ($id) {
  return "Blog post $id";
})
// ->where([
//   // This is regExp to allow a number
//   'id' => '[0-9]+'
// ])
->name('posts.show');

// Optional parameter
Route::get('/recent-posts/{days_ago?}', function ($daysAgo = 20) {
  return "A post from $daysAgo days ago.";
})->name('posts.recent.index');
