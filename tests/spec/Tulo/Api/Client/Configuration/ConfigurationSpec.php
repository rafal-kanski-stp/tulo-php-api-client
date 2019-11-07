<?php

declare(strict_types=1);

namespace tests\spec\Tulo\Api\Client\Configuration;

use PhpSpec\ObjectBehavior;
use Tulo\Api\Client\Configuration\Authorization\AccessTokenUrl;
use Tulo\Api\Client\Configuration\Authorization\AuthorizeUrl;
use Tulo\Api\Client\Configuration\Authorization\BaseApiUrl;
use Tulo\Api\Client\Configuration\Authorization\ClientCredentials;
use Tulo\Api\Client\Configuration\Authorization\ClientId;
use Tulo\Api\Client\Configuration\Authorization\ClientSecret;
use Tulo\Api\Client\Configuration\Authorization\RedirectUrl;
use Tulo\Api\Client\Configuration\Authorization\Urls;
use Tulo\Api\Client\Configuration\Configuration;

/**
 * @mixin Configuration
 */
class ConfigurationSpec extends ObjectBehavior
{
    private const CLIENT_ID = 'some-client-id-for-ouath';
    private const SECRET_ID = 'some-client-secret-for-ouath';
    private const AUTHORIZE_URL = '';

    private const REDIRECT_URL = 'https://implementing-ouath-page.com/redirect';

    private $clientCredentials;
    private $urls;

    function let(): void
    {
        $this->clientCredentials = new ClientCredentials(new ClientId(self::CLIENT_ID), new ClientSecret(self::SECRET_ID));
        $this->urls = new Urls(
            new RedirectUrl(self::REDIRECT_URL),
            new AuthorizeUrl(self::AUTHORIZE_URL),
            new AccessTokenUrl(''),
            new BaseApiUrl('')
        );

        $this->beConstructedWith($this->clientCredentials, $this->urls);
    }

    function it_is_initializable(): void
    {
        $this->shouldHaveType(Configuration::class);
    }

    function it_returns_client_credentials(): void
    {
        $this->getClientCredentials()->shouldBe($this->clientCredentials);
    }

    function it_returns_urls(): void
    {
        $this->getUrls()->shouldBe($this->urls);
    }
}
