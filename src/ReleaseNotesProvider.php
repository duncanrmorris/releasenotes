<?php
namespace duncanrmorris\releasenotes;

use Illuminate\Support\ServiceProvider;

class ReleaseNotesProvider extends ServiceProvider

{
    
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/views','releasenotes');
        $this->publishes([
            __DIR__.'/app/Http/Controllers/ReleaseNotesController.php' => config_path('/src/Http/Controllers/ReleaseNotesController.php'),
        ]);
    }

    public function register()
    {
        
    }
}

