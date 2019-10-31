<?php

declare(strict_types=1);

namespace Tulo\Api\Client\Configuration\Authorization;

final class AuthorizeUrl
{
    private $authorizeUrl;

    public function __construct(string $authorizeUrl)
    {
        $this->authorizeUrl = $authorizeUrl;
    }

    public function get(): string
    {
        return $this->authorizeUrl;
    }
}
