<?php

namespace LaravelSchema\Places;

use Illuminate\Support\ServiceProvider;

class PlacesServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/places.php' => config_path('places.php'),
        ]);
    }
    public function register()
    {
        
    }
}