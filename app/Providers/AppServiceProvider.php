<?php

namespace App\Providers;

use App\Contracts\Daos\CommentDaoInterface;
use App\Contracts\Daos\PostDaoInterface;
use App\Contracts\Services\CommentServiceInterface;
use App\Contracts\Services\PostServiceInterface;
use App\Daos\CommentDao;
use App\Daos\PostDao;
use App\Services\CommentService;
use App\Services\PostService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(PostServiceInterface::class, PostService::class);
        $this->app->bind(PostDaoInterface::class, PostDao::class);

        $this->app->bind(CommentServiceInterface::class, CommentService::class);
        $this->app->bind(CommentDaoInterface::class, CommentDao::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
