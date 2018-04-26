<?php

namespace NolanLe\SmsNotification;

use Illuminate\Support\Facades\Request;
use Illuminate\Support\ServiceProvider;

class SmsNotificationServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'sms-notification');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        // todo
    }
}