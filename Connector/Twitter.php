<?php
namespace GDO\DogTwitter\Connector;

use GDO\Dog\DOG_Connector;
use GDO\Dog\DOG_Message;
use GDO\Dog\DOG_Server;

final class Twitter extends DOG_Connector
{

    public function init(): bool
    {
    }

    public function connect(): bool
    {
    }

    public function disconnect(string $reason): void
    {
    }

    public function readMessage(): ?DOG_Message
    {
    }

    public function setupServer(DOG_Server $server): void
    {
    }
}
