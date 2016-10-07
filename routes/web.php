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

Route::get('/about', ['as' => 'about', function () {
	return view('frontend.pages.about');
}]);

Route::get('/services', ['as' => 'services', function () {
	return view('frontend.pages.services');
}]);

Route::get('/members', ['as' => 'members', 'uses' => 'MemberController@index']);

Route::get('/member_detail', ['as' => 'member_detail', function () {
	return view('frontend.pages.member_detail');
}]);

Route::get('/posts', ['as' => 'posts','uses' => 'PostController@index']);

Route::get('/post_detail/{id}', ['as' => 'post_detail','uses' => 'PostController@show' ]);

Route::get('/projects', ['as' => 'projects', 'uses' => 'ProjectController@index']);

Route::get('/single_project', ['as' => 'single_project', function (){
	return view('frontend.pages.single_project');
}]);

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/admin', 'AdminController@index');
Route::get('admin/login', 'AdminAuth\LoginController@showLoginForm');
Route::post('admin/login', 'AdminAuth\LoginController@login');
Route::get('admin/logout', 'AdminAuth\Controller@logout');
Route::get('/admin/register', 'AdminAuth\RegisterController@showRegistrationForm');
Route::post('/admin/register', ['as' => 'admin.register.post', 'uses' => 'AdminAuth\RegisterController@register']);
Route::get('test', 'PostController@index');
Auth::routes();

Route::get('/home', 'HomeController@index');
