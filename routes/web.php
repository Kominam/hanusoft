<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('frontend.pages.index');
});

Route::get('/index', ['as' => 'index', function () {
    return view ('frontend.pages.index');
}]);

Route::get('/contact', ['as' => 'contact', function() {
	return view('frontend.pages.contact');
}]);

Route::post('send-contact','ContactController@contact');

Route::get('/about', ['as' => 'about', function () {
	return view('frontend.pages.about');
}]);

Route::get('/services', ['as' => 'services', function () {
	return view('frontend.pages.services');
}]);

Route::get('/members', ['as' => 'members', 'uses' => 'MemberController@index']);

Route::get('/member_detail/{id}', ['as' => 'member_detail', 'uses' => 'MemberController@show']);

Route::get('/posts', ['as' => 'posts','uses' => 'PostController@index']);

Route::get('/post_detail/{id}', ['as' => 'post_detail','uses' => 'PostController@show' ]);

Route::get('/projects', ['as' => 'projects', 'uses' => 'ProjectController@index']);

Route::get('/single_project/{id}', ['as' => 'single_project','uses' => 'ProjectController@show']);
Route::get('post/by-category/{id}', ['as' => 'browse-post-by-cate','uses' => 'PostController@filterByCategory']);
Route::post('post-comment', ['as' => 'post-comment', 'uses' => 'CommentController@create']);

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/admin', 'AdminController@index');
Route::get('admin/login', 'AdminAuth\LoginController@showLoginForm');
Route::post('admin/login', 'AdminAuth\LoginController@login');
Route::get('admin/logout', 'AdminAuth\Controller@logout');
Route::get('/admin/register', 'AdminAuth\RegisterController@showRegistrationForm');
Route::post('/admin/register', ['as' => 'admin.register.post', 'uses' => 'AdminAuth\RegisterController@register']);
Route::get('test/{id}', 'PostController@filterByCategory');
Auth::routes();

Route::get('/home', 'HomeController@index');
