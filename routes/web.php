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
	Route::group(['prefix' => 'member'], function () {
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

		Route::get('/todo_list', ['as' => 'todo_list', function(){
			return view('backend.pages.todo_list');
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
			//Post Management
			Route::get('/write-post', ['as' => 'showPostForm','uses'=>'PostController@showAddForm']);
			Route::post('/write-post', ['as' => 'writePost', 'uses'=>'PostController@add']);
			Route::get('/your-post', ['as' => 'your-post', 'uses'=>'PostController@showYourPost']);
			Route::get('/edit-post/{id}', ['as' => 'get.edit.post', 'uses'=>'PostController@showEditForm']);
			Route::post('/edit-post/{id}', ['as' => 'post.edit.post', 'uses'=>'PostController@edit']);
			Route::get('delete-post/{id}',['as' => 'delete-post', 'uses'=>'PostController@delete']);
			//Project Management
			Route::get('/project/{id}', ['as' => 'backend.project', 'uses' => 'ProjectController@showForBackEnd']);
			Route::get('/create-project', ['as' => 'create-project','uses'=>'ProjectController@showAddForm']);
			Route::post('/create-project', ['as' => 'createProject','uses'=>'ProjectController@add']);
					//project managerment->invite memeber
			Route::post('invite-members',['as' => 'invite-members', 'uses' => 'ProjectController@invite'] );
			Route::post('accept-invite',['as' => 'accept-invite', 'uses' => 'ProjectController@acceptInvite'] );
					//project managerment-> state management
			Route::post('add-state',['as' => 'post.add-state', 'uses' => 'StateController@create']);
			Route::get('delete-state/{state_id}',['as' => 'delete-state', 'uses' => 'StateController@delete']);
					//project managerment-> task management
			Route::post('add-task',['as' => 'post.add-task', 'uses' => 'TodoItemController@create']);
			Route::post('update-task',['as' => 'post.update-task', 'uses' => 'TodoItemController@update']);
			Route::get('delete-task/{task_id}',['as' => 'delete-task', 'uses' => 'TodoItemController@delete']);
			Route::get('mark-task-as-done/{task_id}',['as' => 'mark-task-as-done', 'uses' => 'TodoItemController@markAsDone']);
			//Profile Management
			Route::get('/profile', ['as' => 'profile', 'uses'=> 'MemberController@profile']);
			Route::get('/profile-edit', ['as' => 'profile-edit', 'uses' => 'MemberController@showEditProfile']);
			Route::post('profile-edit', ['as' => 'post.profile-edit', 'uses' => 'MemberController@editProfile']);
			Route::post('change-pwd', ['as' => 'change-pwd', 'uses' => 'MemberController@changePwd']);
			Route::get('/profile-activity', ['as' => 'profile-activity', 'uses' => 'MemberController@recent_activity']);
			Route::get('/mail', ['as' => 'mail', function() {
				return view('backend.pages.mail');
			}]);
			//Chat Management
			Route::post('chat-project',['as' => 'chat-project', 'uses' => 'ChatController@chat']);
			Route::post('get-chat-project-cont',['as' => 'get-chat-project-cont', 'uses' => 'ChatController@getChatContent']);
			//Notification Management
			Route::post('notifications','NotificationController@delete');
			Route::get('all_message_noti','NotificationController@getAllMessageNoti')->name('all_message_noti');
			Route::get('all_task_noti','NotificationController@getAllTaskNoti')->name('all_task_noti');
			Route::get('all_important_noti','NotificationController@getAllImportanNoti')->name('all_important_noti');
			Route::get('noti/MarkRead/{notification_id}','NotificationController@markRead')->name('markRead');
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

	Route::post('add-subcribers', ['as' => 'post-add-subcriber', 'uses' => 'SubcriberController@addNewSubcriber']);
	
	
	/*Route::get('/admin', 'AdminController@index');
	Route::get('admin/login', 'AdminAuth\LoginController@showLoginForm');
	Route::post('admin/login', 'AdminAuth\LoginController@login');
	Route::get('admin/logout', 'AdminAuth\Controller@logout');
	Route::get('/admin/register', 'AdminAuth\RegisterController@showRegistrationForm');
	Route::post('/admin/register', ['as' => 'admin.register.post', 'uses' => 'AdminAuth\RegisterController@register']);*/
	 Route::get('test', 'ProjectController@invite');
	
	 //Social Login
    Route::get('/redirect/{provider}', 'SocialAuthController@redirect');
    Route::get('/callback/{provider}', 'SocialAuthController@callback');