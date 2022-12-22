<?php

namespace Kapilrain\Category\Providers;

use Illuminate\Support\ServiceProvider;

class CategoryServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        $this->loadViewsFrom(__DIR__.'/../views', 'category');
        $this->loadMigrationsFrom(__DIR__.'/../Database/migrations');
    }

    public function register()
    {
        
    }
}