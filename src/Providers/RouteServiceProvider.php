<?php

namespace Ninhnk\FirstPackage\Providers;

use Illuminate\Support\ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->commands([
            \NinhNK\FirstPackage\Console\SetupEnvironmentCommand::class,
        ]);

        if ($this->app->runningInConsole()) {
            $this->commands([
                \NinhNK\FirstPackage\Console\SetupEnvironmentCommand::class,
            ]);
        }
        
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'first-package');
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');


        $this->publishes([
            __DIR__ . '/../resources/assets' => public_path('first-package/assets'),
//            __DIR__ . '/../database' => database_path('/'),
        ]);
    }
}
