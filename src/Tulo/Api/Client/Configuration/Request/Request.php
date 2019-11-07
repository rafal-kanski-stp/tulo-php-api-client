<?php

declare(strict_types=1);

namespace Tulo\Api\Client\Configuration\Request;

use Tulo\Api\Client\Configuration\Authorization\AccessToken;

final class Request
{
    private $method;
    private $url;
    private $accessToken;
    private $headers;
    private $body;

    public function __construct(HttpMethod $method, Url $url, AccessToken $accessToken, Headers $headers, ?Body $body)
    {
        $this->method = $method;
        $this->url = $url;
        $this->accessToken = $accessToken;
        $this->headers = $headers;
        $this->body = $body;
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

    public function getHeaders(): Headers
    {
        return $this->headers;
    }

    public function getBody(): ?Body
    {
        return $this->body;
    }

    public function hasBody(): bool
    {
        return $this->body !== null;
    }
}
