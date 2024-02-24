<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use App\Models\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{

    protected $policies = [
        //
    ];

    public function boot(): void
    {
        Gate::define('answer-application', function (User $user) {
            return $user->role->name == 'manager';
        });
    }
}
