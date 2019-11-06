<?php

declare(strict_types=1);

namespace tests\spec\Tulo\Api\Client\Configuration\Authorization;

use PhpSpec\ObjectBehavior;
use Tulo\Api\Client\Configuration\Authorization\ClientId;

/**
 * @mixin ClientId
 */
class ClientIdSpec extends ObjectBehavior
{
    private const CLIENT_ID = 'client-id';

    function let(): void
    {
        $this->beConstructedWith(self::CLIENT_ID);
    }

    function it_is_initializable(): void
    {
        $this->shouldHaveType(ClientId::class);
    }

    function it_returns_client_id(): void
    {
        $this->get()->shouldBe(self::CLIENT_ID);
    }
}
