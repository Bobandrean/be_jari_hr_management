<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\User\UserRepository;
use App\Repositories\User\UserRepositoryImplement;

use App\Repositories\Employee\EmployeeRepository;
use App\Repositories\Employee\EmployeeRepositoryImplement;

use App\Repositories\Position\PositionRepository;
use App\Repositories\Position\PositionRepositoryImplement;

use App\Repositories\Role\RoleRepository;
use App\Repositories\Role\RoleRepositoryImplement;

use App\Repositories\AnnualLeave\AnnualLeaveRepository;
use App\Repositories\AnnualLeave\AnnualLeaveRepositoryImplement;

use App\Repositories\RequestLeave\RequestLeaveRepository;
use App\Repositories\RequestLeave\RequestLeaveRepositoryImplement;

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

        $this->app->bind(
            EmployeeRepository::class,
            EmployeeRepositoryImplement::class
        );

        $this->app->bind(
            PositionRepository::class,
            PositionRepositoryImplement::class
        );

        $this->app->bind(
            RoleRepository::class,
            RoleRepositoryImplement::class
        );

        $this->app->bind(
            AnnualLeaveRepository::class,
            AnnualLeaveRepositoryImplement::class
        );

        $this->app->bind(
            RequestLeaveRepository::class,
            RequestLeaveRepositoryImplement::class
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
