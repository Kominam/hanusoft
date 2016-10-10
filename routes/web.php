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

	
	Route::get('/home', 'HomeController@index');
	Route::group(['prefix' => 'member'], function () {
		Route::get('/index', ['as' => 'member.index', function () {
		return view('backend.pages.index');
		}]);
		
		Route::get('/mail', ['as' => 'mail', function() {
		return view('backend.pages.mail');
		}]);
		
		Route::get('/form_component', ['as' => 'form_component', function() {
		return view('backend.pages.form_component');
		}]);
		
		Route::get('/form_wizard', ['as' => 'form_wizard', function() {
		return view('backend.pages.form_wizard');
		}]);
		
		Route::get('/form_validation', ['as' => 'form_validation', function() {
		return view('backend.pages.form_validation');
		}]);
		
		Route::get('/basic_table', ['as' => 'basic_table', function() {
		return view('backend.pages.basic_table');
		}]);
		
		Route::get('/morris', ['as' => 'morris', function() {
		return view('backend.pages.morris');
		}]);
		
		Route::get('/xchart', ['as' => 'xchart', function() {
		return view('backend.pages.xchart');
		}]);
		// Login Routes...
		Route::get('login', ['as' => 'login', 'uses' => 'Auth\LoginController@showLoginForm']);
		Route::post('/login', 'Auth\LoginController@login');
		Route::get('/logout', 'Auth\LoginController@logout');
		// Registration Routes...
		Route::get('register', ['as' => 'register', 'uses' => 'Auth\RegisterController@showRegistrationForm']);
		Route::post('register', ['as' => 'register.post', 'uses' => 'Auth\RegisterController@register']);

		// Password Reset Routes...
    	Route::get('password/reset', ['as' => 'password.reset', 'uses' => 'Auth\ForgotPasswordController@showLinkRequestForm']);
    	Route::post('password/email', ['as' => 'password.email', 'uses' => 'Auth\ForgotPasswordController@sendResetLinkEmail']);
    	Route::get('password/reset/{token}', ['as' => 'password.reset.token', 'uses' => 'Auth\ResetPasswordController@showResetForm']);
    	Route::post('password/reset', ['as' => 'password.reset.post', 'uses' => 'Auth\ResetPasswordController@reset']);
		});
	
	
	//For guest
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
<<<<<<< HEAD
	}]);
	
	Route::get('/members', ['as' => 'members', 'uses' => 'MemberController@index']);
	
	Route::get('/member_detail/{id}', ['as' => 'member_detail', 'uses' => 'MemberController@show']);
	
	Route::get('/posts', ['as' => 'posts','uses' => 'PostController@index']);
	
	Route::get('/post_detail/{id}', ['as' => 'post_detail','uses' => 'PostController@show' ]);
	
	Route::get('/projects', ['as' => 'projects', 'uses' => 'ProjectController@index']);
	
	Route::get('/single_project/{id}', ['as' => 'single_project','uses' => 'ProjectController@show']);
	
	Route::get('post/by-category/{id}', ['as' => 'browse-post-by-cate','uses' => 'PostController@filterByCategory']);
	
	Route::post('post-comment', ['as' => 'post-comment', 'uses' => 'CommentController@create']);
	
	
	/*Route::get('/admin', 'AdminController@index');
	Route::get('admin/login', 'AdminAuth\LoginController@showLoginForm');
	Route::post('admin/login', 'AdminAuth\LoginController@login');
	Route::get('admin/logout', 'AdminAuth\Controller@logout');
	Route::get('/admin/register', 'AdminAuth\RegisterController@showRegistrationForm');
	Route::post('/admin/register', ['as' => 'admin.register.post', 'uses' => 'AdminAuth\RegisterController@register']);*/
	Route::get('test/{id}', 'PostController@filterByCategory');
	
=======
}]);

// Route for backend
Route::get('/ahihi', ['as' => 'ahihi', function () {
	return view('backend.pages.index');
}]);

Route::get('/mail', ['as' => 'mail', function() {
	return view('backend.pages.mail');
}]);

Route::get('/form_component', ['as' => 'form_component', function() {
	return view('backend.pages.form_component');
}]);

Route::get('/form_wizard', ['as' => 'form_wizard', function() {
	return view('backend.pages.form_wizard');
}]);

Route::get('/form_validation', ['as' => 'form_validation', function() {
	return view('backend.pages.form_validation');
}]);

Route::get('/basic_table', ['as' => 'basic_table', function() {
	return view('backend.pages.basic_table');
}]);

Route::get('/morris', ['as' => 'morris', function() {
	return view('backend.pages.morris');
}]);

Route::get('/xchart', ['as' => 'xchart', function() {
	return view('backend.pages.xchart');
}]);

Route::get('/signin', ['as' => 'signin', function() {
	return view('backend.pages.login');
}]);

Route::get('/signup', ['as' => 'register', function() {
	return view('backend.pages.register');
}]);

Route::get('/profile', ['as' => 'profile', function(){
	return view('backend.pages.profile');
}]);

Route::get('/profile-edit', ['as' => 'profile-edit', function(){
	return view('backend.pages.profile-edit');
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
>>>>>>> 97c326f19b75b4363944b6409572a4701507ba8b
