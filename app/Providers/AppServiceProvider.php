<?php

namespace App\Providers;

use App\Collection;
use App\Comment;
use App\Post;
use App\Series;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Relation::morphMap([
           'series' => Series::class,
           'collection' => Collection::class,
           'post' => Post::class,
           'comment' => Comment::class,
        ]);
    }
}
