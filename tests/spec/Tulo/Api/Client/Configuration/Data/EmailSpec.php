<?php

declare(strict_types=1);

namespace tests\spec\Tulo\Api\Client\Configuration\Data;

use PhpSpec\ObjectBehavior;
use Tulo\Api\Client\Configuration\Data\Email;

/**
 * @mixin Email
 */
class EmailSpec extends ObjectBehavior
{
    private const EMAIL_ADDRESS = 'email@address.no';

    function let(): void
    {
        $this->beConstructedWith(self::EMAIL_ADDRESS);
    }

    function it_is_initializable(): void
    {
        $this->shouldHaveType(Email::class);
    }

    function it_returns_email(): void
    {
        $this->get()->shouldBe(self::EMAIL_ADDRESS);
    }
}
