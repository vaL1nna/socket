<?php

namespace Moyi\Socket\Facade;

use Illuminate\Support\Facades\Facade;
use Moyi\Socket\Socket as SocketService;

/**
 * @method static string encrypt(string $socketId, string $channel)
 * @method static bool trigger()
 */
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
