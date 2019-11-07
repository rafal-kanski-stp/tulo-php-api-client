<?php

declare(strict_types=1);

namespace Tulo\Api\Client\Configuration\Response;

use Psr\Http\Message\ResponseInterface;

final class Response
{
    private const CREATED_STATUS_CODE = 204;

    private $statusCode;
    private $body;

    private function __construct(int $statusCode, string $body)
    {
        $this->statusCode = $statusCode;
        $this->body = $body;
    }

    public static function createFromPsrResponse(ResponseInterface $response): self
    {
        return new self(
            $response->getStatusCode(),
            $response->getBody()->getContents()
        );
    }

    public function wasCreated(): bool
    {
        return $this->statusCode === self::CREATED_STATUS_CODE;
    }

    public function getStatusCode(): int
    {
        return $this->statusCode;
    }
}
