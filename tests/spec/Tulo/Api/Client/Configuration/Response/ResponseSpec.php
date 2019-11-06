<?php

declare(strict_types=1);

namespace tests\spec\Tulo\Api\Client\Configuration\Response;

use PhpSpec\ObjectBehavior;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\StreamInterface;
use Tulo\Api\Client\Configuration\Response\Response;

/**
 * @mixin Response
 */
class ResponseSpec extends ObjectBehavior
{
    private const STATUS_CODE = 200;
    private const CREATED_STATUS_CODE = 204;
    private const BODY = '{"status":"ok"}';

    function it_is_initializable(): void
    {
        $this->shouldHaveType(Response::class);
    }

    function it_returns_status_code(ResponseInterface $response, StreamInterface $stream): void
    {
        $response->getStatusCode()->willReturn(self::STATUS_CODE);
        $response->getBody()->willReturn($stream);
        $stream->getContents()->willReturn(self::BODY);

        $this->beConstructedThrough('createFromPsrResponse', [$response]);

        $this->getStatusCode()->shouldBe(self::STATUS_CODE);
    }

    function it_informs_when_resource_was_created(ResponseInterface $response, StreamInterface $stream): void
    {
        $response->getStatusCode()->willReturn(self::CREATED_STATUS_CODE);
        $response->getBody()->willReturn($stream);
        $stream->getContents()->willReturn(self::BODY);

        $this->beConstructedThrough('createFromPsrResponse', [$response]);

        $this->wasCreated()->shouldBe(true);
    }
}
