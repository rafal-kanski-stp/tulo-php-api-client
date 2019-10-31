<?php

declare(strict_types=1);

namespace Tulo\Api\Client\Configuration\Authorization;

final class ClientId
{
    private $clientId;

    public function __construct(string $clientId)
    {
        $this->clientId = $clientId;
    }

    public function get(): string
    {
        return $this->clientId;
    }
}
