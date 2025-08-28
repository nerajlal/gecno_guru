<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use PhonePe\payments\v2\standardCheckout\StandardCheckoutClient;
use PhonePe\Env;
use PhonePe\common\exceptions\PhonePeException;

class PhonePeServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(StandardCheckoutClient::class, function ($app) {
            $config = $app['config']['services.phonepe'];

            try {
                return StandardCheckoutClient::getInstance(
                    $config['client_id'],
                    $config['client_version'],
                    $config['client_secret'],
                    Env::UAT // Use UAT for test credentials
                );
            } catch (PhonePeException $e) {
                // Log the exception or handle it as needed
                // For now, we'll just rethrow it to see the error during development
                throw $e;
            }
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
