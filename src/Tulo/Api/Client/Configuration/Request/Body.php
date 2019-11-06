<?php

declare(strict_types=1);

namespace Tulo\Api\Client\Configuration\Request;

final class Body
{
    private $body;

    public function __construct(string $body)
    {
        $this->body = $body;
    }

    public function get(): string
    {
        return $this->body;
    }
}
