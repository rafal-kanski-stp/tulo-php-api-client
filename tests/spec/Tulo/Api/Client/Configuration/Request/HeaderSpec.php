<?php

declare(strict_types=1);

namespace tests\spec\Tulo\Api\Client\Configuration\Request;

use PhpSpec\ObjectBehavior;
use Tulo\Api\Client\Configuration\Request\Header;

/**
 * @mixin Header
 */
class HeaderSpec extends ObjectBehavior
{
    private const HEADER_NAME = 'Content-Type';
    private const HEADER_VALUE = 'application/json';

    function let(): void
    {
        $this->beConstructedWith(self::HEADER_NAME, self::HEADER_VALUE);
    }

    function it_is_initializable(): void
    {
        $this->shouldHaveType(Header::class);
    }

    function it_returns_header_name(): void
    {
        $this->getName()->shouldBe(self::HEADER_NAME);
    }

    function it_returns_header_value(): void
    {
        $this->getValue()->shouldBe(self::HEADER_VALUE);
    }
}
