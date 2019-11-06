<?php

declare(strict_types=1);

namespace tests\spec\Tulo\Api\Client\Configuration\Request;

use PhpSpec\ObjectBehavior;
use Tulo\Api\Client\Configuration\Authorization\AccessToken;
use Tulo\Api\Client\Configuration\Request\Body;
use Tulo\Api\Client\Configuration\Request\Headers;
use Tulo\Api\Client\Configuration\Request\HttpMethod;
use Tulo\Api\Client\Configuration\Request\Request;
use Tulo\Api\Client\Configuration\Request\Url;

/**
 * @mixin Request
 */
class RequestSpec extends ObjectBehavior
{
    private $httpMethod;
    private $url;
    private $accessToken;
    private $headers;
    private $body;

    function let(): void
    {
        $this->httpMethod = HttpMethod::createForPostMethod();
        $this->url = new Url('https://www.example.com');
        $this->accessToken = new AccessToken('dadadsdadasdasds', null);
        $this->headers = new Headers();
        $this->body = new Body('');

        $this->beConstructedWith($this->httpMethod, $this->url, $this->accessToken, $this->headers, $this->body);
    }

    function it_is_initializable(): void
    {
        $this->shouldHaveType(Request::class);
    }

    function it_returns_http_method(): void
    {
        $this->getHttpMethod()->shouldBe($this->httpMethod);
    }

    function it_returns_url(): void
    {
        $this->getUrl()->shouldBe($this->url);
    }

    function it_returns_access_token(): void
    {
        $this->getAccessToken()->shouldBe($this->accessToken);
    }

    function it_returns_headers(): void
    {
        $this->getHeaders()->shouldBe($this->headers);
    }

    function it_returns_body(): void
    {
        $this->getBody()->shouldBe($this->body);
    }
}
