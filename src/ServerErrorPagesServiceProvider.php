<?php

namespace EnnioSousa\ServerErrorPages;

use Illuminate\Support\ServiceProvider;

class ServerErrorPagesServiceProvider extends ServiceProvider {

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot() {
        $this->loadPackageViews();
        $this->loadPackageTranslation();
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register() {
        //
    }

    private function loadPackageViews() {
        $this->publishes([__DIR__ . '/Resources/views/errors' => resource_path('views/errors')], 'errors');
        $this->publishes([__DIR__ . '/Resources/views/template' => resource_path('views/vendor/server-error-pages')], 'views');
        
        $this->loadViewsFrom(__DIR__ . '/Resources/views/template', 'server-error-pages');
    }

    private function loadPackageTranslation() {
        $this->publishes([__DIR__ . '/Resources/lang' => resource_path('lang/vendor/server-error-pages')], 'lang');

        $this->loadTranslationsFrom(__DIR__ . '/Resources/lang', 'server-error-pages');
    }

}
