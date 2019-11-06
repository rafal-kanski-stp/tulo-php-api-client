<?php

declare(strict_types=1);

namespace tests\spec\Tulo\Api\Client\Configuration\Authorization;

use PhpSpec\ObjectBehavior;
use Tulo\Api\Client\Configuration\Authorization\AccessToken;

/**
 * @mixin AccessToken
 */
class AccessTokenSpec extends ObjectBehavior
{
    private const TOKEN = 'ABCD';
    private const REFRESH_TOKEN = 'dsadsdsaadsdas';

    function let(): void
    {
        $this->beConstructedWith(self::TOKEN, self::REFRESH_TOKEN);
    }

    function it_is_initializable(): void
    {
        $this->shouldHaveType(AccessToken::class);
    }

    function it_returns_access_token(): void
    {
        $this->getToken()->shouldBe(self::TOKEN);
    }

    function it_returns_refresh_token(): void
    {
        $this->getRefreshToken()->shouldBe(self::REFRESH_TOKEN);
    }
}
