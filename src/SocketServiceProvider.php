<?php

namespace Moyi\Socket;

use Illuminate\Support\ServiceProvider;
class SocketServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(Socket::class, function ($app) {
            $config = new Config("secret", "host");
            return new Socket($config);
        });
    }
}