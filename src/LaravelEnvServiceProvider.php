<?php

namespace Gaurav\LaravelEnv;

use Illuminate\Support\ServiceProvider;

class LaravelEnvServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/views', 'laravelEnv');
    }

    public function register()
    {

    }
}
