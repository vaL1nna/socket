<?php

namespace Moyi\Socket;

class Socket
{
    public string $appId;

    public string $secret;

    public string $host;

    public function __construct(string $appId, string $secret, string $host)
    {
        $this->appId = $appId;

        $this->secret = $secret;

        $this->host = $host;
    }

    /**
     * @param string $socketId
     * @param string $channel
     * @return string
     */
    public function encrypt(string $socketId, string $channel)
    {
        return md5(sprintf('%s:%s:%s', $socketId, $channel, $this->secret));
    }

    public function trigger()
    {
        echo "trigger";
    }
}
