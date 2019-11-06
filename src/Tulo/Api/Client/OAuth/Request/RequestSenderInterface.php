<?php

declare(strict_types=1);

namespace Tulo\Api\Client\OAuth\Request;

use Tulo\Api\Client\Configuration\Request\Request;
use Tulo\Api\Client\Configuration\Response\Response;
use Tulo\Api\Client\OAuth\Request\Exception\RequestSenderException;

interface RequestSenderInterface
{
    /**
     * @throws RequestSenderException
     */
    public function send(Request $parameters): Response;
}
