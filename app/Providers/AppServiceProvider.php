<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\User\UserRepository;
use App\Repositories\User\UserRepositoryImplement;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
        $this->app->bind(
            UserRepository::class,
            UserRepositoryImplement::class
        );
        }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
