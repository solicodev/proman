<?php

namespace App\Providers;

use App\Models\Project;
use App\Models\Task;
use App\Observers\TaskObserver;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
//        $ticket_not_seen = Auth::user()->tickets()->whereHas('messages', function ($query) {
//            $query->whereNot('user_id', Auth::id())->whereDoesntHave('seen', function ($query2) {
//                $query2->where('user_id', Auth::id());
//            });
//        })->count();
        view()->composer('*', function ($view) {
            $user_projects = Project::with(['manager','members'])->where('manager_id',Auth::id())->get();
            $use_projects = $user_projects->pluck('id')->all();
            $user_tasks = Task::with(['project','manager'])->whereIn('project_id',$use_projects)->get();

            $item_members = [];
            foreach ($user_projects as $item)
            {
                $item_members = $item->members?->toArray();
            }
//            $files_array = array_merge($item_members , );
            $view->with('user_projects', $user_projects);
            $view->with('user_tasks', $user_tasks);
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Schema::defaultStringLength(191);
        Task::observe(TaskObserver::class);
    }
}
