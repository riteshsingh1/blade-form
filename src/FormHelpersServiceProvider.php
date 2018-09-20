<?php

namespace imritesh\FormHelpers;

use Illuminate\Support\ServiceProvider;

class FormHelpersServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'imritesh');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'imritesh');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        // Publishing is only necessary when using the CLI.
        if ($this->app->runningInConsole()) {

            // Publishing the configuration file.
            $this->publishes([
                __DIR__.'/../config/formhelpers.php' => config_path('formhelpers.php'),
            ], 'formhelpers.config');

            // Publishing the views.
            $this->publishes([
                __DIR__.'/../resources/views' => base_path('resources/views'),
            ], 'formhelpers.views');

            // Publishing assets.
            /*$this->publishes([
                __DIR__.'/../resources/assets' => public_path('vendor/imritesh'),
            ], 'formhelpers.views');*/

            // Publishing the translation files.
            /*$this->publishes([
                __DIR__.'/../resources/lang' => resource_path('lang/vendor/imritesh'),
            ], 'formhelpers.views');*/

            // Registering package commands.
            // $this->commands([]);
        }
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/formhelpers.php', 'formhelpers');

        // Register the service the package provides.
        $this->app->singleton('formhelpers', function ($app) {
            return new FormHelpers;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['formhelpers'];
    }
}