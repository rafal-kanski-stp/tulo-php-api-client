<?php

declare(strict_types=1);

namespace Tulo\Api\Client\OAuth\AccessToken;

use Tulo\Api\Client\Configuration\Authorization\AccessToken;
use Tulo\Api\Client\OAuth\AccessToken\Exception\CouldNotProvideAccessTokenException;

interface AccessTokenProviderInterface
{
    /**
     * @throws CouldNotProvideAccessTokenException
     */
    public function getBasedOnClientCredentials(): AccessToken;
}
