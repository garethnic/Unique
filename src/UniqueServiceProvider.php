<?php

namespace garethnic\Unique;

use Illuminate\Support\ServiceProvider;

class UniqueServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
           __DIR__.'/config/unique.php' => config_path('unique.php')
        ]);
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {

    }
}