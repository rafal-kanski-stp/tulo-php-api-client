<?php

declare(strict_types=1);

namespace tests\spec\Tulo\Api\Client\Configuration\Authorization;

use PhpSpec\ObjectBehavior;
use Tulo\Api\Client\Configuration\Authorization\AccessTokenUrl;

/**
 * @mixin AccessTokenUrl
 */
class AccessTokenUrlSpec extends ObjectBehavior
{
    private const ACCESS_TOKEN_URL = 'http://url/token';

    function let(): void
    {
        $this->beConstructedWith(self::ACCESS_TOKEN_URL);
    }

    function it_is_initializable(): void
    {
        $this->shouldHaveType(AccessTokenUrl::class);
    }

    function it_returns_access_token_url(): void
    {
        $this->get()->shouldBe(self::ACCESS_TOKEN_URL);
    }
}
