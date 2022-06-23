<?php

namespace Ejaznoob\Binanceapi;

use Illuminate\Support\ServiceProvider;

class BinanceapiServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot(): void
    {
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'ejaznoob');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'ejaznoob');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        // Publishing is only necessary when using the CLI.
        if ($this->app->runningInConsole()) {
            $this->bootForConsole();
        }
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/binanceapi.php', 'binanceapi');

        // Register the service the package provides.
        $this->app->singleton('binanceapi', function ($app) {
            return new Binanceapi;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['binanceapi'];
    }

    /**
     * Console-specific booting.
     *
     * @return void
     */
    protected function bootForConsole(): void
    {
        // Publishing the configuration file.
        $this->publishes([
            __DIR__.'/../config/binanceapi.php' => config_path('binanceapi.php'),
        ], 'binanceapi.config');

        // Publishing the views.
        /*$this->publishes([
            __DIR__.'/../resources/views' => base_path('resources/views/vendor/ejaznoob'),
        ], 'binanceapi.views');*/

        // Publishing assets.
        /*$this->publishes([
            __DIR__.'/../resources/assets' => public_path('vendor/ejaznoob'),
        ], 'binanceapi.views');*/

        // Publishing the translation files.
        /*$this->publishes([
            __DIR__.'/../resources/lang' => resource_path('lang/vendor/ejaznoob'),
        ], 'binanceapi.views');*/

        // Registering package commands.
        // $this->commands([]);
    }
}
