<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\User;
use App\Observers\UserObserver;

class ObserverServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        User::observe(UserObserver::class);
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
