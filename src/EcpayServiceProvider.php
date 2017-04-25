<?php

namespace Ifwelove\Ecpay;

use Illuminate\Support\ServiceProvider;

class EcpayServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //Publish Config
        $this->publishes([
            __DIR__ . '/Config/ecpay.php' => config_path('ecpay.php'),
        ], 'config');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('ecpay', function ($app) {
            return new Ecpay;
        });

    }
}
