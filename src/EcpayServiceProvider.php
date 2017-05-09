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
        if (!file_exists(config_path('payment.php'))) {
            $this->publishes([
                __DIR__ . '/Config/payment.php' => config_path('payment.php'),
            ], 'config');
        }
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
