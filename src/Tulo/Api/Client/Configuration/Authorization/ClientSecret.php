<?php

declare(strict_types=1);

namespace Tulo\Api\Client\Configuration\Authorization;

final class ClientSecret
{
    private $clientSecret;

    public function __construct(string $clientSecret)
    {
        $this->clientSecret = $clientSecret;
    }

    public function get(): string
    {
        return $this->clientSecret;
    }
}
