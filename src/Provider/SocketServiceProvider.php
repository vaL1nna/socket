<?php

namespace Moyi\Socket\Provider;

use Illuminate\Support\ServiceProvider;
use Moyi\Socket\Socket;

class SocketServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../../config/socket.php', 'socket');

        $this->app->singleton(Socket::class, function ($app) {
            return new Socket(
                $app['config']->get('socket.key'),
                $app['config']->get('socket.secret'),
                $app['config']->get('socket.host')
            );
        });
    }

    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/my-package.php' => config_path('my-package.php'),
        ], 'config');
    }
}
