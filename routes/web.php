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

// Route::get('/', function () {
//     return view('index');
// });

// Route::get('/business', function () {
//     return view('business');
// });

Auth::routes();

Route::get('/', 'RedirectController@index');
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/blogs/{key}','RedirectController@blog');

Route::get('/blogs/content/{key}', 'RedirectController@content');

Route::get('/BlogEditor', 'RedirectController@BlogEdit');

Route::get('/MyBlogs', 'RedirectController@MyBlogs');

Route::get('/DeleteBlogs/{id}', 'RedirectController@DeleteBlog');

// Route::get('saveBlog/{heading}/{content}', 'RedirectController@saveBlog');

Route::post('/saveBlog', 'RedirectController@saveBlog')->name('saveblog.action');
Route::get('/fetchBlog/{key}', 'RedirectController@FetchBlog');

Route::get('/Filter_MyBlogs/{key}', 'RedirectController@Filter_MyBlogs');

Route::post('/editBlog', 'RedirectController@editBlog')->name('editBlog.action');


