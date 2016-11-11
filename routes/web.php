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

	Auth::routes();
	Route::group(['prefix' => 'my'], function () {
		// Login Routes...
		Route::get('login', ['as' => 'login.showLoginForm', 'uses' => 'Auth\LoginController@showLoginForm']);
		Route::post('/login', 'Auth\LoginController@login')->name('login');
		// Registration Routes...
		Route::get('register', ['as' => 'register', 'uses' => 'Auth\RegisterController@showRegistrationForm']);
		Route::post('register', ['as' => 'register.post', 'uses' => 'Auth\RegisterController@register']);

		// Password Reset Routes...
	Route::get('password/reset', ['as' => 'password.reset', 'uses' => 'Auth\ForgotPasswordController@showLinkRequestForm']);
    	Route::post('password/email', ['as' => 'password.email', 'uses' => 'Auth\ForgotPasswordController@sendResetLinkEmail']);
    	Route::get('password/reset/{token}', ['as' => 'password.reset.token', 'uses' => 'Auth\ResetPasswordController@showResetForm']);
    	Route::post('password/reset', ['as' => 'password.reset.post', 'uses' => 'Auth\ResetPasswordController@reset']);
		Route::group(['middleware' => ['auth']], function () {
			Route::get('/', 'HomeController@index')->name('dashboard');
			Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
			//Post Management
			Route::group(['prefix' => 'post'], function () {
				Route::get('/', ['as' => 'post.your-post', 'uses'=>'PostController@showYourPost']);
				Route::get('/write', ['as' => 'post.create','uses'=>'PostController@showAddForm']);
				Route::post('/write', ['as' => 'post.store', 'uses'=>'PostController@add']);			
				Route::get('/edit/{slug}', ['as' => 'post.edit', 'uses'=>'PostController@showEditForm']);
				Route::post('/edit/{slug}', ['as' => 'post.update', 'uses'=>'PostController@edit']);
				Route::get('/delete/{id}',['as' => 'post.destroy', 'uses'=>'PostController@delete']);
			});
			//Project Management
			Route::group(['prefix' => 'project'], function () {
				Route::get('/{slug}', ['as' => 'project.show', 'uses' => 'ProjectController@showForBackEnd']);
				Route::get('/op/create', ['as' => 'project.create','uses'=>'ProjectController@showAddForm']);
				Route::post('/op/store', ['as' => 'project.store','uses'=>'ProjectController@add']);
				Route::get('/delete/{id}',['as' => 'project.destroy','uses'=>'ProjectController@delete']);
			});
					//project managerment->invite memeber
			Route::group(['prefix' => 'invitation'], function () {
				Route::post('/create',['as' => 'invitation.create', 'uses' => 'ProjectController@invite'] );
				Route::post('/handle',['as' => 'invitation.handle', 'uses' => 'ProjectController@handleInvitation'] );
			});
			
					//project managerment-> state management
			Route::group(['prefix' => 'state'], function () {
				Route::post('create',['as' => 'state.store', 'uses' => 'StateController@create']);
				Route::get('delete/{state_id}',['as' => 'state.destroy', 'uses' => 'StateController@delete']);
			});
				//project managerment-> task management
			Route::group(['prefix' => 'task'], function () {
				Route::post('create',['as' => 'task.store', 'uses' => 'TodoItemController@create']);
				Route::post('update',['as' => 'task.update', 'uses' => 'TodoItemController@update']);
				Route::get('delete/{task_id}',['as' => 'task.destroy', 'uses' => 'TodoItemController@delete']);
				Route::get('mark-as-done/{task_id}',['as' => 'task.markAsDone', 'uses' => 'TodoItemController@markAsDone']);
			});
	
			//Profile Management
			Route::group(['prefix' => 'profile'], function () {
				Route::get('/', ['as' => 'profile.show', 'uses'=> 'MemberController@profile']);
				Route::get('/edit', ['as' => 'profile.edit', 'uses' => 'MemberController@showEditProfile']);
				Route::post('/edit', ['as' => 'profile.update', 'uses' => 'MemberController@editProfile']);
				Route::post('/change-password', ['as' => 'profile.changePassword', 'uses' => 'MemberController@changePwd']);
				Route::get('/activity', ['as' => 'profile.activity', 'uses' => 'MemberController@recent_activity']);
				Route::get('/inbox', ['as' => 'profile.inbox', function() {
					return view('backend.pages.mail');
				}]);
			});
			//Friends Management
			Route::group(['prefix' => 'friends'], function () {
				Route::get('/{slug}', ['as' => 'friends.profile', 'uses' => 'MemberController@showProfileForOther']);
			});
			//Chat Management
			Route::group(['prefix' => 'chat'], function () {
				Route::post('/create',['as' => 'chat.store', 'uses' => 'ChatController@chat']);
				Route::post('/get-content',['as' => 'chat.getContent', 'uses' => 'ChatController@getChatContent']);
			});

			
			//Notification Management
			Route::post('notifications','NotificationController@delete');
			Route::group(['prefix' => 'notification'], function () {
				Route::get('/message','NotificationController@getAllMessageNoti')->name('all_message_noti');
				Route::get('/task','NotificationController@getAllTaskNoti')->name('all_task_noti');
				Route::get('/notification','NotificationController@getAllImportanNoti')->name('all_important_noti');
				Route::get('/MarkRead/{notification_id}','NotificationController@markRead')->name('markRead');
			});
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
	
	Route::get('/members/{slug}', ['as' => 'member_detail', 'uses' => 'MemberController@show']);
	
	Route::get('/posts', ['as' => 'posts','uses' => 'PostController@index']);
	
	Route::get('/posts/{slug}', ['as' => 'post_detail','uses' => 'PostController@show']);
	Route::get('posts/category/{slug}', ['as' => 'browse-post-by-cate','uses' => 'PostController@filterByCategory']);
	Route::post('post-comment', ['as' => 'post-comment', 'uses' => 'CommentController@create']);
	Route::post('post-reply-comment', ['as' => 'post-reply-comment', 'uses' => 'ReplyCommentController@create']);

	Route::get('/projects', ['as' => 'projects', 'uses' => 'ProjectController@index']);	
	Route::get('/projects/{slug}', ['as' => 'single_project','uses' => 'ProjectController@show']);
	
	Route::post('add-subcribers', ['as' => 'post-add-subcriber', 'uses' => 'SubcriberController@addNewSubcriber']);
	
	 //Social Login
    Route::get('/redirect/{provider}', 'SocialAuthController@redirect');
    Route::get('/callback/{provider}', 'SocialAuthController@callback');
