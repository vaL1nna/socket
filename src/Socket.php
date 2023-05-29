<?php

namespace Moyi\Socket;

class Socket
{
    private $config;

    public function __construct(Config $config)
    {
        $this->config = $config;
    }

    public function encrypt(string $socketId, string $channel)
    {
        return md5(sprintf('%s:%s:%s', $socketId, $channel, $this->config->secret));
    }

    public function trigger()
    {
        echo "trigger";
    }
}
