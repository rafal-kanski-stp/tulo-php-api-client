<?php

declare(strict_types=1);

namespace Tulo\Api\Client\Configuration\Request;

use Tulo\Api\Client\Configuration\Authorization\AccessToken;

final class Parameters
{
    private $method;
    private $url;
    private $accessToken;

    public function __construct(HttpMethod $method, Url $url, AccessToken $accessToken)
    {
        $this->method = $method;
        $this->url = $url;
        $this->accessToken = $accessToken;
    }

    public function getHttpMethod(): HttpMethod
    {
        return $this->method;
    }

    public function getUrl(): Url
    {
        return $this->url;
    }

    public function getAccessToken(): AccessToken
    {
        return $this->accessToken;
    }
}
