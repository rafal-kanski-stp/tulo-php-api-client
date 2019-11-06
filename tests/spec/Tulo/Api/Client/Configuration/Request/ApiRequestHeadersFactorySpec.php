<?php

declare(strict_types=1);

namespace tests\spec\Tulo\Api\Client\Configuration\Request;

use PhpSpec\ObjectBehavior;
use Tulo\Api\Client\Configuration\Request\ApiRequestHeadersFactory;

/**
 * @mixin ApiRequestHeadersFactory
 */
class ApiRequestHeadersFactorySpec extends ObjectBehavior
{
    function it_is_initializable(): void
    {
        $this->shouldHaveType(ApiRequestHeadersFactory::class);
    }

    function it_returns_headers_with_json_content_type_header(): void
    {
        $this->create()->normalize()->shouldHaveKeyWithValue('Content-Type', 'application/json');
    }
}
