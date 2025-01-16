<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Gate::define('is-admin', function ($user) {
            return in_array($user->email, config('custom.admins'));
        });

        Gate::define('is-owner', function ($user, object $register) {
            return $user->id === $register->user_id;
        });
    }
}