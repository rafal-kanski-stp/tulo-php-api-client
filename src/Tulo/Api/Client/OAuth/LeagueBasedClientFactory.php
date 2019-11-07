<?php

declare(strict_types=1);

namespace Tulo\Api\Client\OAuth;

use League\OAuth2\Client\Provider\GenericProvider;
use Tulo\Api\Client\Configuration\Configuration;
use Tulo\Api\Client\OAuth\AccessToken\LeagueBasedAccessTokenProvider;
use Tulo\Api\Client\OAuth\Request\Builder\LeagueBasedRequestOptionsBuilder;
use Tulo\Api\Client\OAuth\Request\LeagueBasedRequestSender;
use Tulo\Api\League\Grant\GrantWithNoneTypeFactory;

final class LeagueBasedClientFactory implements ClientFactory
{
    public function create(Configuration $configuration): ClientInterface
    {
        $clientCredentials = $configuration->getClientCredentials();
        $urls = $configuration->getUrls();

        $provider = new GenericProvider([
            'clientId' => $clientCredentials->getClientId()->get(),
            'clientSecret' => $clientCredentials->getClientSecret()->get(),
            'redirectUri' => $urls->getRedirectUrl()->get(),
            'urlAuthorize' => $urls->getAuthorizeUrl()->get(),
            'urlAccessToken' => $urls->getAccessTokenUrl()->get(),
            'urlResourceOwnerDetails' => ''
        ]);

        $provider->setGrantFactory(new GrantWithNoneTypeFactory());

        return new Client(
            $configuration,
            new LeagueBasedAccessTokenProvider($provider),
            new LeagueBasedRequestSender($provider, new LeagueBasedRequestOptionsBuilder())
        );
    }
}
