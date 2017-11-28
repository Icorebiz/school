<?php

namespace Icorebiz\Base;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;
use Illuminate\Support\Facades\View;

class ServiceProvider extends BaseServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/resources/views', 'school');
        view()->composer('base::left_panel', function ($view) {
            View::make('school::menu')->render();
        });
    }

}
