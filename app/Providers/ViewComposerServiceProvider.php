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
        //Popular posts
        View::composer(['frontend.pages.posts', 'frontend.pages.post_detail'], function ($view) {
                $popular_posts = Post::get()->sortByDesc(function($post)
                {
                    return $post->comments->count();
                })->take(3);
            $view->with('popular_posts', $popular_posts);
        });
        //Recent posts
        View::composer(['frontend.pages.posts', 'frontend.pages.post_detail'], function ($view) {
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
         View::composer(['backend.pages.create-project'], function ($view) {
            $all_project_cate = ProjectType::all();
            $view->with('all_project_cate', $all_project_cate);
        });
          View::composer(['backend.pages.create-project'], function ($view) {
            $all_skill = Skill::all();
            $view->with('all_skill', $all_skill);
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
