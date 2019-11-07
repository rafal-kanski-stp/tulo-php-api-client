<?php

declare(strict_types=1);

namespace Tulo\Api\Client\Configuration\Request;

final class HttpMethod
{
    private const POST_METHOD = 'POST';

    private $method;

    private function __construct(string $method)
    {
        $this->method = $method;
    }

    public static function createForPostMethod(): self
    {
        return new self(self::POST_METHOD);
    }

    public function get(): string
    {
        return $this->method;
    }
}
