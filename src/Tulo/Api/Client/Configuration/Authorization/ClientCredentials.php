<?php

declare(strict_types=1);

namespace Tulo\Api\Client\Configuration\Authorization;

final class ClientCredentials
{
    private $clientId;
    private $clientSecret;

    public function __construct(ClientId $clientId, ClientSecret $clientSecret)
    {
        $this->clientId = $clientId;
        $this->clientSecret = $clientSecret;
    }

    public function getClientId(): ClientId
    {
        return $this->clientId;
    }

    public function getClientSecret(): ClientSecret
    {
        return $this->clientSecret;
    }
}
