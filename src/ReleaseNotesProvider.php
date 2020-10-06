<?php
namespace duncanrmorris\releasenotes;

use Illuminate\Support\ServiceProvider;

class ReleaseNotesProvider extends ServiceProvider

{
    
    public function boot()
    {
        //$this->loadRoutesFrom(__DIR__.'/routes/web.php');
        //$this->loadViewsFrom(__DIR__.'/views','releasenotes');
        $this->mergeConfigFrom(__DIR__.'/config/releasenotes.php','releasenotes');
        $this->publishes([
            __DIR__.'/config/releasenotes.php' => config_path('releasenotes.php'),
            __DIR__.'/Http/Controllers/ReleaseNotesController.php' => base_path('app/Http/Controllers/ReleaseNotesController.php'),
            __DIR__.'/views/notes.blade.php' => base_path('resources/views/releasenotes/notes.blade.php'),

        ]);
    }

    public function register()
    {
        
    }
}

