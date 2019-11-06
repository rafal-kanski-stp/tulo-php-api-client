<?php

declare(strict_types=1);

namespace Tulo\Api\Client\OAuth;

use Tulo\Api\Client\Configuration\Configuration;
use Tulo\Api\Client\OAuth\AccessToken\AccessTokenProviderInterface;
use Tulo\Api\Client\OAuth\Request\RequestSenderInterface;

interface ClientInterface
{
    public function getConfiguration(): Configuration;
    public function getAccessTokenProvider(): AccessTokenProviderInterface;
    public function getRequestSender(): RequestSenderInterface;
}
