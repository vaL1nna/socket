<?php

namespace Moyi\Socket\Provider;

use Illuminate\Support\ServiceProvider;
use Moyi\Socket\Socket;

class SocketServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(Socket::class, function ($app) {
            return new Socket(
                $app['config']->get('socket.key'),
                $app['config']->get('socket.secret'),
                $app['config']->get('socket.host')
            );
        });
    }
}
