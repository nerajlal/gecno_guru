<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(\Gemini\Contracts\ClientContract::class, static function () {
            $apiKey = config('gemini.api_key');
            if (! is_string($apiKey)) {
                throw \Gemini\Laravel\Exceptions\MissingApiKey::create();
            }

            $client = \Gemini::factory()
                ->withApiKey(apiKey: $apiKey)
                ->withHttpClient(new \GuzzleHttp\Client([
                    'timeout' => config('gemini.request_timeout', 30),
                    'verify' => ! app()->isLocal(), // This will disable SSL verification for local environment
                ]));

            $baseURL = config('gemini.base_url');
            if (! empty($baseURL)) {
                $client->withBaseUrl(baseUrl: $baseURL);
            }

            return $client->make();
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Schema::defaultStringLength(191);
    }
}
