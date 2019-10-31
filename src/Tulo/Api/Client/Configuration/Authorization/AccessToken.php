<?php

declare(strict_types=1);

namespace Tulo\Api\Client\Configuration\Authorization;

final class AccessToken
{
    private $accessToken;

    public function __construct(string $accessToken)
    {
        $this->accessToken = $accessToken;
    }

    public function get(): string
    {
        return $this->accessToken;
    }
}
