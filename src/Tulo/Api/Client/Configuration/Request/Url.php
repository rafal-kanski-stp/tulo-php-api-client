<?php

declare(strict_types=1);

namespace Tulo\Api\Client\Configuration\Request;

final class Url
{
    private $url;

    public function __construct(string $url)
    {
        $this->url = $url;
    }

    public function get(): string
    {
        return $this->url;
    }
}
