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

Route::get('/members', ['as' => 'members', function () {
	return view('frontend.pages.members');
}]);

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('admin/login', 'AdminAuth\LoginController@showLoginForm');
Route::post('admin/login', 'AdminAuth\LoginController@login');
Route::get('admin/logout', 'AdminAuth\Controller@logout');
Route::get('/admin/register', 'AdminAuth\RegisterController@showRegistrationForm');
Route::post('/admin/register', ['as' => 'admin.register.post', 'uses' => 'AdminAuth\RegisterController@register']);
