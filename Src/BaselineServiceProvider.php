<?php

namespace Baseline;

use Baseline\Console\Commands\ResetApp;
use Illuminate\Support\ServiceProvider;

class BaselineServiceProvider extends ServiceProvider
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
        if ($this->app->runningInConsole()) {
            $this->commands([
                ResetApp::class
            ]);
        }
    }
}
