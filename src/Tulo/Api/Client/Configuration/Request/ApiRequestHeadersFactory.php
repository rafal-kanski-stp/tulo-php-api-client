<?php

declare(strict_types=1);

namespace Tulo\Api\Client\Configuration\Request;

final class ApiRequestHeadersFactory
{
    public function create(): Headers
    {
        $headers = new Headers();

        $headers->add(new Header('Content-Type', 'application/json'));

        return $headers;
    }
}
