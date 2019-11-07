<?php

declare(strict_types=1);

namespace Tulo\Api\Client\OAuth;

use Tulo\Api\Client\Configuration\Configuration;
use Tulo\Api\Client\OAuth\AccessToken\AccessTokenProviderInterface;
use Tulo\Api\Client\OAuth\Request\RequestSenderInterface;

final class Client implements ClientInterface
{
    private $configuration;
    private $accessTokenProvider;
    private $requestSender;

    public function __construct(
        Configuration $configuration,
        AccessTokenProviderInterface $accessTokenProvider,
        RequestSenderInterface $requestSender
    ) {
        $this->configuration = $configuration;
        $this->accessTokenProvider = $accessTokenProvider;
        $this->requestSender = $requestSender;
    }

    public function getConfiguration(): Configuration
    {
        return $this->configuration;
    }

    public function getAccessTokenProvider(): AccessTokenProviderInterface
    {
        return $this->accessTokenProvider;
    }

    public function getRequestSender(): RequestSenderInterface
    {
        return $this->requestSender;
    }
}
