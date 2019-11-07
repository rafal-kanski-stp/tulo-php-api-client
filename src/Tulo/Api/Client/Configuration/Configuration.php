<?php

declare(strict_types=1);

namespace Tulo\Api\Client\Configuration;

use Tulo\Api\Client\Configuration\Authorization\ClientCredentials;
use Tulo\Api\Client\Configuration\Authorization\Urls;

final class Configuration
{
    private $clientCredentials;
    private $urls;

    public function __construct(ClientCredentials $clientCredentials, Urls $urls)
    {
        $this->clientCredentials = $clientCredentials;
        $this->urls = $urls;
    }

    public function getClientCredentials(): ClientCredentials
    {
        return $this->clientCredentials;
    }

    public function getUrls(): Urls
    {
        return $this->urls;
    }
}
