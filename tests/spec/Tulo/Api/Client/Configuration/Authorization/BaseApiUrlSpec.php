<?php

declare(strict_types=1);

namespace tests\spec\Tulo\Api\Client\Configuration\Authorization;

use PhpSpec\ObjectBehavior;
use Tulo\Api\Client\Configuration\Authorization\BaseApiUrl;

/**
 * @mixin BaseApiUrl
 */
class BaseApiUrlSpec extends ObjectBehavior
{
    private const BASE_API_URL = 'https://bae.pai.url';
    private const API_PATH = 'users/images';

    function let(): void
    {
        $this->beConstructedWith(self::BASE_API_URL);
    }

    function it_is_initializable(): void
    {
        $this->shouldHaveType(BaseApiUrl::class);
    }

    function it_returns_base_api_url_with_the_path(): void
    {
        $expectedApiUrl = sprintf('%s/%s', self::BASE_API_URL, self::API_PATH);

        $this->getApiUrl(self::API_PATH)->shouldBe($expectedApiUrl);
    }
}
