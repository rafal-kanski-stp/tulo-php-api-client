<?php

declare(strict_types=1);

namespace Tulo\Api\Client\Configuration\Authorization;

final class Urls
{
    private $redirectUrl;
    private $authorizeUrl;
    private $accessTokenUrl;
    private $baseApiUrl;

    public function __construct(
        RedirectUrl $redirectUrl,
        AuthorizeUrl $authorizeUrl,
        AccessTokenUrl $accessTokenUrl,
        BaseApiUrl $baseApiUrl
    ) {
        $this->redirectUrl = $redirectUrl;
        $this->authorizeUrl = $authorizeUrl;
        $this->accessTokenUrl = $accessTokenUrl;
        $this->baseApiUrl = $baseApiUrl;
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

    public function getBaseApiUrl(): BaseApiUrl
    {
        return $this->baseApiUrl;
    }
}
