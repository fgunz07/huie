<?php

namespace Fgunz07\Huie;

use Illuminate\Support\ServiceProvider;

class HuieServiceProvider extends ServiceProvider
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
        $this->publishes([
	        __DIR__.'/config.php' => config_path('huie.php'),
	    ]);
    }
}
