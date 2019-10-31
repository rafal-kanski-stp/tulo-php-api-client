<?php

declare(strict_types=1);

namespace Tulo\Api\Client\AccessToken;

use League\OAuth2\Client\Provider\AbstractProvider;
use League\OAuth2\Client\Provider\Exception\IdentityProviderException;
use Tulo\Api\Client\AccessToken\Exception\CouldNotProvideAccessTokenException;
use Tulo\Api\Client\Configuration\Authorization\AccessToken;

final class LeagueBasedAccessTokenProvider implements AccessTokenProviderInterface
{
    private const CLIENT_CREDENTIALS_TYPE = 'client_credentials';

    private $provider;

    public function __construct(AbstractProvider $provider)
    {
        $this->provider = $provider;
    }

    /**
     * @throws CouldNotProvideAccessTokenException
     */
    public function getBasedOnClientCredentials(): AccessToken
    {
        try {
            $this->provider->getAccessToken(self::CLIENT_CREDENTIALS_TYPE)->getToken();
        } catch (IdentityProviderException $exception) {
            throw CouldNotProvideAccessTokenException::createFromPrevious($exception);
        }
    }
}
