<?php

declare(strict_types=1);

namespace tests\spec\Tulo\Api\Client\Configuration\Request;

use PhpSpec\ObjectBehavior;
use Tulo\Api\Client\Configuration\Request\Header;
use Tulo\Api\Client\Configuration\Request\Headers;

/**
 * @mixin Headers
 */
class HeadersSpec extends ObjectBehavior
{
    function it_is_initializable(): void
    {
        $this->shouldHaveType(Headers::class);
    }

    function it_contains_empty_collection_at_the_beginning(): void
    {
        $this->shouldNotHaveAtLeastOne();
    }

    function it_stores_header_collection(): void
    {
        $this->add(new Header( 'Content-Type', "application/json" ));

        $this->shouldHaveAtLeastOne();
    }

    function it_normalizes_headers(): void
    {
        $this->add(new Header( 'Content-Type', "text/html" ));
        $this->add(new Header( 'Length', "100" ));

        $this->normalize()->shouldBe(
            [
                'Content-Type' => 'text/html',
                'Length' => '100',
            ]
        );
    }
}
