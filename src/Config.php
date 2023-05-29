<?php

namespace Moyi\Socket;

class Config
{
    public string $secret;
    public string $host;

    public function __construct(string $secret, string $host)
    {
        $this->secret = $secret;
        $this->host = $host;
    }
}
