<?php

declare(strict_types=1);

namespace Tulo\Api\Client\Configuration\Authorization;

final class AccessTokenUrl
{
    private $accessTokenUrl;

    public function __construct(string $accessTokenUrl)
    {
        $this->accessTokenUrl = $accessTokenUrl;
    }

    public function get(): string
    {
        return $this->accessTokenUrl;
    }
}
