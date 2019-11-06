<?php

declare(strict_types=1);

namespace Tulo\Api\Client\OAuth\AccessToken;

use League\OAuth2\Client\Provider\AbstractProvider;
use League\OAuth2\Client\Provider\Exception\IdentityProviderException;
use Tulo\Api\Client\Configuration\Authorization\AccessToken;
use Tulo\Api\Client\OAuth\AccessToken\Exception\CouldNotProvideAccessTokenException;

final class LeagueBasedAccessTokenProvider implements AccessTokenProviderInterface
{
    private const TULO_NONE_TYPE = 'none';

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
            $accessToken = $this->provider->getAccessToken(self::TULO_NONE_TYPE);

            return new AccessToken($accessToken->getToken(), $accessToken->getRefreshToken());
        } catch (IdentityProviderException $exception) {
            throw CouldNotProvideAccessTokenException::createFromPrevious($exception);
        }
    }
}
