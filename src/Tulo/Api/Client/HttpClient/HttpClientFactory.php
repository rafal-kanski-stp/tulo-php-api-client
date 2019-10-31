<?php

declare(strict_types=1);

namespace Tulo\Api\Client;

use League\OAuth2\Client\Provider\GenericProvider;
use Tulo\Api\Client\Configuration\Configuration;
use Tulo\Api\Client\HttpClient\HttpClient\HttpClientInterface;
use Tulo\Api\Client\HttpClient\LeagueBasedHttpClient;

final class HttpClientFactory
{
    public function create(Configuration $configuration): HttpClientInterface
    {
        return new LeagueBasedHttpClient(
            new GenericProvider([
                'clientId' => $configuration->getClientCredentials()->getClientId()->get(),
                'clientSecret' => $configuration->getClientCredentials()->getClientSecret()->get(),
                'redirectUri' => $configuration->getRedirectUrl()->get(),
                'urlAuthorize' => $configuration->getAuthorizeUrl()->get(),
                'urlAccessToken' => $configuration->getAccessTokenUrl()->get(),
            ])
        );
    }
}
