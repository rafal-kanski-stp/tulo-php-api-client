<?php

declare(strict_types=1);

namespace Tulo\Api\Client\Configuration\Request;

final class HttpMethod
{
    private $method;

    public function __construct(string $method)
    {
        $this->method = $method;
    }

    public function get(): string
    {
        return $this->method;
    }
}
