<?php

declare(strict_types=1);

namespace Tulo\Api\Client\Configuration\Authorization;

final class AccessToken
{
    private $token;
    private $refreshToken;

    public function __construct(string $token, ?string $refreshToken)
    {
        $this->token = $token;
        $this->refreshToken = $refreshToken;
    }

    public function getToken(): string
    {
        return $this->token;
    }

    public function getRefreshToken(): ?string
    {
        return $this->refreshToken;
    }
}
