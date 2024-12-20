<?php

namespace davidle90\timetracker;

use Illuminate\Support\ServiceProvider;

class TimetrackerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/timetracker.php');
        $this->loadViewsFrom(__DIR__.'/resources/views', 'timetracker');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        $this->mergeConfigFrom(__DIR__.'/config/bookings.php', 'timetracker');

        if(file_exists($file = __DIR__.'/Helpers/helpers.php')){
            require $file;
        }
    }
}
