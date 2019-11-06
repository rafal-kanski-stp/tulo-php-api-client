<?php

declare(strict_types=1);

namespace tests\spec\Tulo\Api\Client\Configuration\Request;

use PhpSpec\ObjectBehavior;
use Tulo\Api\Client\Configuration\Request\Body;

/**
 * @mixin Body
 */
class BodySpec extends ObjectBehavior
{
    private const REQUEST_BODY = '{
        "email": "test@wp.pl"
    }';

    function let(): void
    {
        $this->beConstructedWith(self::REQUEST_BODY);
    }

    function it_is_initializable(): void
    {
        $this->shouldHaveType(Body::class);
    }

    function it_returns_request_body(): void
    {
        $this->get()->shouldBe(self::REQUEST_BODY);
    }
}
