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

	
	Route::group(['prefix' => 'member'], function () {
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

		Route::get('/dynamic_table', ['as' => 'dynamic_table', function() {
			return view('backend.pages.dynamic_table');
		}]);

		Route::get('/advanced_table', ['as' => 'advanced_table', function() {
			return view('backend.pages.advanced_table');
		}]);

		Route::get('/editable_table', ['as' => 'editable_table', function() {
			return view('backend.pages.editable_table');
		}]);
		
		Route::get('/morris', ['as' => 'morris', function() {
			return view('backend.pages.morris');
		}]);
		
		Route::get('/xchart', ['as' => 'xchart', function() {
			return view('backend.pages.xchart');
		}]);

		Route::get('/profile', ['as' => 'profile', function(){
			return view('backend.pages.profile');
		}]);

		Route::get('/profile-edit', ['as' => 'profile-edit', function(){
			return view('backend.pages.profile-edit');
		}]);

		// Login Routes...
		Route::get('login', ['as' => 'login', 'uses' => 'Auth\LoginController@showLoginForm']);
		Route::post('/login', 'Auth\LoginController@login');
		// Registration Routes...
		Route::get('register', ['as' => 'register', 'uses' => 'Auth\RegisterController@showRegistrationForm']);
		Route::post('register', ['as' => 'register.post', 'uses' => 'Auth\RegisterController@register']);

		// Password Reset Routes...
    	Route::get('password/reset', ['as' => 'password.reset', 'uses' => 'Auth\ForgotPasswordController@showLinkRequestForm']);
    	Route::post('password/email', ['as' => 'password.email', 'uses' => 'Auth\ForgotPasswordController@sendResetLinkEmail']);
    	Route::get('password/reset/{token}', ['as' => 'password.reset.token', 'uses' => 'Auth\ResetPasswordController@showResetForm']);
    	Route::post('password/reset', ['as' => 'password.reset.post', 'uses' => 'Auth\ResetPasswordController@reset']);
		Route::group(['middleware' => ['auth']], function () {
			Route::get('/dashboard', 'HomeController@index')->name('dashboard');
			Route::get('/logout', 'Auth\LoginController@logout');
			});
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
	}]);
	
	Route::get('/members', ['as' => 'members', 'uses' => 'MemberController@index']);
	
	Route::get('/member_detail/{id}', ['as' => 'member_detail', 'uses' => 'MemberController@show']);
	
	Route::get('/posts', ['as' => 'posts','uses' => 'PostController@index']);
	
	Route::get('/post_detail/{id}', ['as' => 'post_detail','uses' => 'PostController@show' ]);
	Route::get('/projects', ['as' => 'projects', 'uses' => 'ProjectController@index']);
	
	Route::get('/single_project/{id}', ['as' => 'single_project','uses' => 'ProjectController@show']);
	
	Route::get('post/by-category/{id}', ['as' => 'browse-post-by-cate','uses' => 'PostController@filterByCategory']);
	
	Route::post('post-comment', ['as' => 'post-comment', 'uses' => 'CommentController@create']);

	Route::post('post-reply-comment', ['as' => 'post-reply-comment', 'uses' => 'ReplyCommentController@create']);
	
	
	/*Route::get('/admin', 'AdminController@index');
	Route::get('admin/login', 'AdminAuth\LoginController@showLoginForm');
	Route::post('admin/login', 'AdminAuth\LoginController@login');
	Route::get('admin/logout', 'AdminAuth\Controller@logout');
	Route::get('/admin/register', 'AdminAuth\RegisterController@showRegistrationForm');
	Route::post('/admin/register', ['as' => 'admin.register.post', 'uses' => 'AdminAuth\RegisterController@register']);*/
	 Route::get('test/{id}', 'PostController@getArrCommentID');
	
	 //Social Login
    Route::get('/redirect/{provider}', 'SocialAuthController@redirect');
    Route::get('/callback/{provider}', 'SocialAuthController@callback');