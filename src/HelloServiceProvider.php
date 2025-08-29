<?php

namespace Robi\Hello;

use Illuminate\Support\ServiceProvider;

class HelloServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        // Daftarkan route package
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
    }

    public function register(): void
    {
        //
    }
}
