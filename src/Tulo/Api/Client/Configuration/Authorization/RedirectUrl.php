<?php

declare(strict_types=1);

namespace Tulo\Api\Client\Configuration\Authorization;

final class RedirectUrl
{
    private $redirectUrl;

    public function __construct(string $redirectUrl)
    {
        $this->redirectUrl = $redirectUrl;
    }

    public function get(): string
    {
        return $this->redirectUrl;
    }
}
