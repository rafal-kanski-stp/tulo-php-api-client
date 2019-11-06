<?php

declare(strict_types=1);

namespace Tulo\Api\Client\Configuration\Authorization;

final class BaseApiUrl
{
    private $baseApiUrl;

    public function __construct(string $baseApiUrl)
    {
        $this->baseApiUrl = $baseApiUrl;
    }

    public function getApiUrl(string $path): string
    {
        return sprintf('%s/%s', $this->baseApiUrl, $path);
    }
}
