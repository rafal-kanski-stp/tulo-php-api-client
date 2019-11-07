<?php

declare(strict_types=1);

namespace tests\spec\Tulo\Api\Client\Configuration\Request;

use PhpSpec\ObjectBehavior;
use Tulo\Api\Client\Configuration\Request\HttpMethod;

/**
 * @mixin HttpMethod
 */
class HttpMethodSpec extends ObjectBehavior
{
    function it_is_initializable(): void
    {
        $this->shouldHaveType(HttpMethod::class);
    }

    function it_handles_post_http_method(): void
    {
        $this->beConstructedThrough('createForPostMethod');

        $this->get()->shouldBe('POST');
    }
}
