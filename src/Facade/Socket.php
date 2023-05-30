<?php

namespace Moyi\Socket\Facade;

use Illuminate\Support\Facades\Facade;
use Moyi\Socket\Socket as SocketService;

class Socket extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return SocketService::class;
    }
}
