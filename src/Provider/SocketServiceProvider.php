<?php

namespace Moyi\Socket\Provider;

use Illuminate\Support\ServiceProvider;
use Moyi\Socket\Socket;
use Moyi\Socket\SocketManager;

class SocketServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../../config/socket.php', 'socket');

        $this->app->singleton(Socket::class, function ($app) {
            return new SocketManager($app);
        });
    }

    public function boot()
    {
        $this->publishes([
            __DIR__.'/../../config/socket.php' => config_path('socket.php'),
        ], 'config');
    }
}
