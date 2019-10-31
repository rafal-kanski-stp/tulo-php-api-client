<?php

declare(strict_types=1);

namespace Tulo\Api\Client\Configuration;

use Tulo\Api\Client\Configuration\Authorization\AccessTokenUrl;
use Tulo\Api\Client\Configuration\Authorization\AuthorizeUrl;
use Tulo\Api\Client\Configuration\Authorization\ClientCredentials;
use Tulo\Api\Client\Configuration\Authorization\RedirectUrl;

final class Configuration
{
    private $clientCredentials;
    private $redirectUrl;
    private $authorizeUrl;
    private $accessTokenUrl;

    public function __construct(
        ClientCredentials $clientCredentials,
        RedirectUrl $redirectUrl,
        AuthorizeUrl $authorizeUrl,
        AccessTokenUrl $accessTokenUrl
    ) {
        $this->clientCredentials = $clientCredentials;
        $this->redirectUrl = $redirectUrl;
        $this->authorizeUrl = $authorizeUrl;
        $this->accessTokenUrl = $accessTokenUrl;
    }

    public function getClientCredentials(): ClientCredentials
    {
        return $this->clientCredentials;
    }

    public function getRedirectUrl(): RedirectUrl
    {
        return $this->redirectUrl;
    }

    public function getAuthorizeUrl(): AuthorizeUrl
    {
        return $this->authorizeUrl;
    }

    public function getAccessTokenUrl(): AccessTokenUrl
    {
        return $this->accessTokenUrl;
    }
}
