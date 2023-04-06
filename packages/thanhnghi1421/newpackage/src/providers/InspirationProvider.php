<?php

namespace Thanhnghi1421\Newpackage\Providers;

use Illuminate\Support\ServiceProvider;

class InspirationProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . "/../routes/web.php");
        $this->loadViewsFrom(__DIR__ . "/../views", "inspire");
        // $this->loadControllersFrom(__DIR__."/../controllers/")
    }
}