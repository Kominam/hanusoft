<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\PostType;
use App\ProjectType;
use App\Post;
use App\Project;
use App\Position;
use App\Skill;
use App\Grade;
use App\User;
use Auth;

class ViewComposerServiceProvider extends ServiceProvider
{
    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function boot()
    {
        // Using class based composers...
        /*View::composer(
            '*', 'App\Http\ViewComposers\PostTypeComposer'
        );*/

        // Using Closure based composers...
        View::composer(['*'], function ($view) {
            $all_post_cate = PostType::all();
            $view->with('all_post_cate', $all_post_cate);
        });
        View::composer(['frontend.pages.members', 'backend.pages.profile-edit'], function ($view) {
            $all_position = Position::all();
            $view->with('all_position', $all_position);
        });
         View::composer(['frontend.pages.members', 'backend.pages.profile-edit', 'backend.pages.register'], function ($view) {
            $all_grade = Grade::all();
            $view->with('all_grade', $all_grade );
        });
        //Popular posts
        View::composer(['frontend.pages.posts', 'frontend.pages.post_detail', 'frontend.pages.search_post_result'], function ($view) {
                $popular_posts = Post::get()->sortByDesc(function($post)
                {
                    return $post->comments->count();
                })->take(3);
            $view->with('popular_posts', $popular_posts);
        });
        //Recent posts
        View::composer(['frontend.pages.posts', 'frontend.pages.post_detail', 'frontend.pages.search_post_result'], function ($view) {
                $recent_posts = Post::get()->sortByDesc(function($post)
                {
                    return $post->created_at;
                })->take(3);
            $view->with('recent_posts', $recent_posts);
        });
        //All Project
         View::composer('frontend.pages.index', function ($view) {
            $all_project= Project::all();
            $view->with('all_project', $all_project);
        });
           //Post For Index
         View::composer('frontend.pages.index', function ($view) {
            $lastest_posts = Post::get()->sortByDesc(function($post)
                {
                    return $post->created_at;
                })->take(6);
            $view->with('lastest_posts', $lastest_posts);
        });
         // Position For Registation
         View::composer('backend.pages.register', function ($view) {
            $all_position= Position::where('name', '<>', 'Leadership')->get();
            $view->with('all_position', $all_position);
        });
         //For create project
         View::composer(['backend.pages.create-project', 'frontend.pages.projects'], function ($view) {
            $all_project_cate = ProjectType::all();
            $view->with('all_project_cate', $all_project_cate);
        });
          View::composer(['backend.pages.create-project'], function ($view) {
            $all_skill = Skill::all();
            $view->with('all_skill', $all_skill);
        });

          View::composer(['backend.pages.create-project','backend.blocks.header'], function ($view) {
            $all_member = User::where('id', '!=' , Auth::user()->id)->get();
            $view->with('all_member', $all_member);
        });
          //Count unread notification
            View::composer(['backend.blocks.header','backend.pages.index'], function ($view) {
            $cur_mem = User::find(Auth::user()->id);
            $num_unread_noti= $cur_mem->unreadNotifications()->whereIn('type',['App\Notifications\InvitetoProject', 'App\Notifications\AddNewState','App\Notifications\UpdateState','App\Notifications\DeleteState'])->count();
            $view->with('num_unread_noti', $num_unread_noti);
        });
            //Count unread message
            View::composer(['backend.blocks.header','backend.pages.index'], function ($view) {
            $cur_mem = User::find(Auth::user()->id);
            $num_unread_mess= $cur_mem->unreadNotifications->where('type','=', 'App\Notifications\ChatProject')->count();
            $view->with('num_unread_mess', $num_unread_mess);
        });
            //For project chat
             View::composer(['backend.pages.mail'], function ($view) {
            $belonged_projects = Auth::user()->projects;
            $view->with('belonged_projects', $belonged_projects);
        });
              //Count unread task
           View::composer(['backend.blocks.header','backend.pages.index'], function ($view) {
            $cur_mem = User::find(Auth::user()->id);
            $num_unread_task= $cur_mem->unreadNotifications->whereIn('type',['App\Notifications\AssignNewTask','App\Notifications\DeleteTask','App\Notifications\UpdateTask','App\Notifications\MarkTaskDone'])->count();
            $view->with('num_unread_task', $num_unread_task);
        });

            //Count new assinged task task
           View::composer(['backend.pages.index'], function ($view) {
            $cur_mem = User::find(Auth::user()->id);
            $num_new_assigned_task= $cur_mem->unreadNotifications->whereIn('type',['App\Notifications\AssignNewTask'])->count();
            $view->with('num_new_assigned_task', $num_new_assigned_task);
        });

            //Count pending task
           View::composer(['backend.pages.index'], function ($view) {
            $cur_mem = User::find(Auth::user()->id);
            $num_pending_task= $cur_mem->todo_items()->wherePivot('status','On queue')->count();
            $view->with('num_pending_task', $num_pending_task);
        });  

    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
