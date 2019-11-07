<?php

declare(strict_types=1);

namespace tests\spec\Tulo\Api\Client\Configuration\Authorization;

use PhpSpec\ObjectBehavior;
use Tulo\Api\Client\Configuration\Authorization\AuthorizeUrl;

/**
 * @mixin AuthorizeUrl
 */
class AuthorizeUrlSpec extends ObjectBehavior
{
    private const AUTHORIZE_URL = 'https://authorize.url';

    function let(): void
    {
        $this->beConstructedWith(self::AUTHORIZE_URL);
    }

    function it_is_initializable(): void
    {
        $this->shouldHaveType(AuthorizeUrl::class);
    }

    function it_returns_authorize_url(): void
    {
        $this->get()->shouldBe(self::AUTHORIZE_URL);
    }
}
