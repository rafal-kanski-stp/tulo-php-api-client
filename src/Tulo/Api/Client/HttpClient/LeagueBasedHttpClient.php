<?php

declare(strict_types=1);

namespace Tulo\Api\Client\HttpClient;

use League\OAuth2\Client\Provider\AbstractProvider;
use Psr\Http\Message\RequestInterface;
use Tulo\Api\Client\Configuration\Request\Parameters;
use Tulo\Api\Client\HttpClient\HttpClient\HttpClientInterface;

final class LeagueBasedHttpClient implements HttpClientInterface
{
    private $provider;

    public function __construct(AbstractProvider $provider)
    {
        $this->provider = $provider;
    }

    public function request(Parameters $parameters): RequestInterface
    {
        return $this->provider->getAuthenticatedRequest(
            $parameters->getHttpMethod()->get(),
            $parameters->getUrl()->get(),
            $parameters->getAccessToken()->get()
        );
    }
}
