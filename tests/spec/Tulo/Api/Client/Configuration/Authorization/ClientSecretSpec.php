<?php

declare(strict_types=1);

namespace tests\spec\Tulo\Api\Client\Configuration\Authorization;

use PhpSpec\ObjectBehavior;
use Tulo\Api\Client\Configuration\Authorization\ClientSecret;

/**
 * @mixin ClientSecret
 */
class ClientSecretSpec extends ObjectBehavior
{
    private const CLIENT_SECRET = 'dsadshljahdsahdsjkhdashkjdshjkads';

    function let(): void
    {
        $this->beConstructedWith(self::CLIENT_SECRET);
    }

    function it_is_initializable(): void
    {
        $this->shouldHaveType(ClientSecret::class);
    }

    function it_returns_client_secret(): void
    {
        $this->get()->shouldBe(self::CLIENT_SECRET);
    }
}
