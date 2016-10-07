<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->bind(
            'App\Repositories\Contracts\ProjectRepositoryInterface',
            'App\Repositories\Eloquents\ProjectRepository'
        );
        $this->app->bind(
            'App\Repositories\Contracts\MemberRepositoryInterface',
            'App\Repositories\Eloquents\MemberRepository'
        );
          $this->app->bind(
            'App\Repositories\Contracts\PostRepositoryInterface',
            'App\Repositories\Eloquents\PostRepository'
        );
    }
}
