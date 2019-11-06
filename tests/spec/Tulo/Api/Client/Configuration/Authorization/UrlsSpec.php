<?php

declare(strict_types=1);

namespace tests\spec\Tulo\Api\Client\Configuration\Authorization;

use PhpSpec\ObjectBehavior;
use Tulo\Api\Client\Configuration\Authorization\AccessTokenUrl;
use Tulo\Api\Client\Configuration\Authorization\AuthorizeUrl;
use Tulo\Api\Client\Configuration\Authorization\BaseApiUrl;
use Tulo\Api\Client\Configuration\Authorization\RedirectUrl;
use Tulo\Api\Client\Configuration\Authorization\Urls;

/**
 * @mixin Urls
 */
class UrlsSpec extends ObjectBehavior
{
    private $redirectUrl;
    private $authorizeUrl;
    private $accessTokenUrl;
    private $baseApiUrl;

    function let(): void
    {
        $this->redirectUrl = new RedirectUrl('https://example.com/redirect');
        $this->authorizeUrl = new AuthorizeUrl('https://example.com/authorize');
        $this->accessTokenUrl = new AccessTokenUrl('https://example.com/access_token');
        $this->baseApiUrl = new BaseApiUrl('https://base.api.example.com');

        $this->beConstructedWith($this->redirectUrl, $this->authorizeUrl, $this->accessTokenUrl, $this->baseApiUrl);
    }

    function it_is_initializable(): void
    {
        $this->shouldHaveType(Urls::class);
    }

    function it_returns_redirect_url(): void
    {
        $this->getRedirectUrl()->shouldBe($this->redirectUrl);
    }

    function it_returns_authorize_url(): void
    {
        $this->getAuthorizeUrl()->shouldBe($this->authorizeUrl);
    }

    function it_returns_access_token_url(): void
    {
        $this->getAccessTokenUrl()->shouldBe($this->accessTokenUrl);
    }

    function it_returns_base_api_url(): void
    {
        $this->getBaseApiUrl()->shouldBe($this->baseApiUrl);
    }
}
