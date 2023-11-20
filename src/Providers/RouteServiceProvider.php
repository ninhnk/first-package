<?php

namespace Ninhnk\FirstPackage\Providers;

use Illuminate\Support\ServiceProvider;
use Ninhnk\FirstPackage\Console\Commands\SetupEnvironmentCommand;

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
        if (! $this->app->runningInConsole()) {
            return;
        }
        $this->registerCommands();

        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'first-package');
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');


        $this->publishes([
            __DIR__ . '/../resources/assets' => public_path('first-package/assets'),
//            __DIR__ . '/../database' => database_path('/'),
        ]);
    }

    protected function registerCommands(): void
    {
        $this->commands([
            SetupEnvironmentCommand::class
        ]);
    }
}