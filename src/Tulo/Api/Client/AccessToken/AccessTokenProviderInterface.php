<?php

declare(strict_types=1);

namespace Tulo\Api\Client\AccessToken;

use Tulo\Api\Client\AccessToken\Exception\CouldNotProvideAccessTokenException;
use Tulo\Api\Client\Configuration\Authorization\AccessToken;

interface AccessTokenProviderInterface
{
    /**
     * @throws CouldNotProvideAccessTokenException
     */
    public function getBasedOnClientCredentials(): AccessToken;
}
