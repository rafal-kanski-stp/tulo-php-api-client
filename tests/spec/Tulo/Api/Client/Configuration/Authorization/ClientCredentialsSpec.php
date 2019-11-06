<?php

declare(strict_types=1);

namespace tests\spec\Tulo\Api\Client\Configuration\Authorization;

use PhpSpec\ObjectBehavior;
use Tulo\Api\Client\Configuration\Authorization\ClientCredentials;
use Tulo\Api\Client\Configuration\Authorization\ClientId;
use Tulo\Api\Client\Configuration\Authorization\ClientSecret;

/**
 * @mixin ClientCredentials
 */
class ClientCredentialsSpec extends ObjectBehavior
{
    private const CLIENT_ID = 'adsajkljkljsdakl';
    private const CLIENT_SECRET = 'dsjalkdjdlsajskldjaldjsklasdjlkds';

    private $clientId;
    private $clientSecret;

    function let(): void
    {
        $this->clientId = new ClientId(self::CLIENT_ID);
        $this->clientSecret = new ClientSecret(self::CLIENT_SECRET);

        $this->beConstructedWith($this->clientId, $this->clientSecret);
    }

    function it_is_initializable(): void
    {
        $this->shouldHaveType(ClientCredentials::class);
    }

    function it_returns_client_id(): void
    {
        $this->getClientId()->shouldBe($this->clientId);
    }

    function it_returns_client_secret(): void
    {
        $this->getClientSecret()->shouldBe($this->clientSecret);
    }
}
