<?php

declare(strict_types=1);

namespace Tulo\Api\Client\HttpClient\HttpClient;

use Psr\Http\Message\RequestInterface;
use Tulo\Api\Client\Configuration\Request\Parameters;

interface HttpClientInterface
{
    public function request(Parameters $parameters): RequestInterface;
}
