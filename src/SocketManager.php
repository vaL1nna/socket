<?php

namespace Moyi\Socket;

use Illuminate\Support\Manager;

class SocketManager extends Manager
{
    public function getDefaultDriver()
    {
        return $this->config->get('socket.default');
    }

    /**
     * Create an instance of the Default Socket Driver.
     *
     * @return Socket
     */
    public function createDefaultDriver() :Socket
    {
        return new Socket($this->config->get('socket.connections.default'));
    }
}
