<?php

declare(strict_types=1);

namespace tests\spec\Tulo\Api\Client\Configuration\Authorization;

use PhpSpec\ObjectBehavior;
use Tulo\Api\Client\Configuration\Authorization\RedirectUrl;

/**
 * @mixin RedirectUrl
 */
class RedirectUrlSpec extends ObjectBehavior
{
    private const REDIRECT_URL = 'https://example.url/redirect';

    function let(): void
    {
        $this->beConstructedWith(self::REDIRECT_URL);
    }

    function it_is_initializable(): void
    {
        $this->shouldHaveType(RedirectUrl::class);
    }

    function it_returns_redirect_url(): void
    {
        $this->get()->shouldBe(self::REDIRECT_URL);
    }
}
