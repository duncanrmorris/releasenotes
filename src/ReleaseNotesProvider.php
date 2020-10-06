<?php
namespace duncanrmorris\releasenotes;

use Illuminate\Support\ServiceProvider;

class ReleaseNotesProvider extends ServiceProvider

{
    
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
    }

    public function register()
    {
        
    }
}

