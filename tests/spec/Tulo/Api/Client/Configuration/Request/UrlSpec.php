<?php

declare(strict_types=1);

namespace tests\spec\Tulo\Api\Client\Configuration\Request;

use PhpSpec\ObjectBehavior;
use Tulo\Api\Client\Configuration\Request\Url;

/**
 * @mixin Url
 */
class UrlSpec extends ObjectBehavior
{
    private const URL = 'https://www.example.com';

    function let(): void
    {
        $this->beConstructedWith(self::URL);
    }

    function it_is_initializable(): void
    {
        $this->shouldHaveType(Url::class);
    }

    function it_returns_url(): void
    {
        $this->get()->shouldBe(self::URL);
    }
}
