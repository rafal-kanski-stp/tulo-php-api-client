<?php

declare(strict_types=1);

namespace Tulo\Api\Client\Configuration\Request;

final class Headers
{
    /**
     * @var Header[]
     */
    private $headers;

    public function __construct()
    {
        $this->headers = [];
    }

    public function add(Header $header): void
    {
        $this->headers[] = $header;
    }

    public function hasAtLeastOne(): bool
    {
        return count($this->headers) > 0;
    }

    /**
     * @return string[]
     */
    public function normalize(): array
    {
        $headers = [];

        foreach ($this->headers as $header) {
            $headers[$header->getName()] = $header->getValue();
        }

        return $headers;
    }
}
