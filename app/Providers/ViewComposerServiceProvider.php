<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\PostType;
use App\Post;
use App\Project;

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
        View::composer(['frontend.pages.posts', 'frontend.pages.post_detail'], function ($view) {
            $all_post_cate = PostType::all();
            $view->with('all_post_cate', $all_post_cate);
        });
        //Popular posts
        View::composer(['frontend.pages.posts', 'frontend.pages.post_detail'], function ($view) {
                $popular_posts = Post::take(3)->get()->sortByDesc(function($post)
                {
                    return $post->comments->count();
                });
            $view->with('popular_posts', $popular_posts);
        });
        //Recent posts
        View::composer(['frontend.pages.posts', 'frontend.pages.post_detail'], function ($view) {
                $recent_posts = Post::take(3)->get()->sortByDesc(function($post)
                {
                    return $post->created_at;
                });
            $view->with('recent_posts', $recent_posts);
        });
        //All Project
         View::composer('frontend.pages.index', function ($view) {
            $all_project= Project::all();
            $view->with('all_project', $all_project);
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
