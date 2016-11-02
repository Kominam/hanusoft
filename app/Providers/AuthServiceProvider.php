<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('create-project', function ($user) {
            if ($user->position->name =='Leadership') {
                return true;
            } else {
                return false;
            }
        });
        Gate::define('update-post', function ($user, $post) {
            return $user->id == $post->user_id;
        });
        Gate::define('subcribe-project', function ($user, $project) {
            $collection = collect([]);
            foreach ($user->projects as $your_project) {
                $collection->push($your_project->id);
            }
            return $collection->contains($project->id);
        });
        Gate::define('manage-project', function ($user, $project) {
            $collection = collect([]);
            foreach ($user->projects as $your_project) {
                $collection->push($your_project->id);
            }
            return ($collection->contains($project->id) && $user->position->name =='Leadership');
        });
        Gate::define('mark-task-done', function ($user, $task) {
            $collection = collect([]);
            foreach ($user->todo_items as $todo_item) {
                $collection->push($todo_item->id);
            }
            return $collection->contains($task->id);
        }); 
    }
}
