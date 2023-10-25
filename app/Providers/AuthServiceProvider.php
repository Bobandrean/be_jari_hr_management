<?php

namespace App\Providers;

use App\Models\Employee;
use App\Models\Role;
use App\Policies\EmployeePolicy;
use App\Policies\RolePolicy;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        Employee::class => EmployeePolicy::class,
        Role::class => RolePolicy::class
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        $this->registerPolicies();
        //Employee Gates
        Gate::define('view-employee', 'App\Policies\EmployeePolicy@view');
        Gate::define('create-employee', 'App\Policies\EmployeePolicy@create');
        Gate::define('update-employee','App\Policies\EmployeePolicy@update');
        Gate::define('delete-employee','App\Policies\EmployeePolicy@delete');

        //Role Gates
        Gate::define('create-role','App\Policies\RolePolicy@create');
        Gate::define('update-role', 'App\Policies\RolePolicy@update');
        //User Gates

    }
}
