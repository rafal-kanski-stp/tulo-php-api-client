<?php

declare(strict_types=1);

namespace Tulo\Api\Client\OAuth\Rest;

use Tulo\Api\Client\Configuration\Configuration;
use Tulo\Api\Client\Configuration\Request\ApiRequestHeadersFactory;
use Tulo\Api\Client\OAuth\ClientFactory;
use Tulo\Api\Client\OAuth\Rest\Accounts\Accounts;
use Tulo\Api\Client\OAuth\Rest\Accounts\Request\PasswordResetBodyFactory;

final class ApiFactory
{
    private $clientFactory;

    public function __construct(ClientFactory $clientFactory)
    {
        $this->clientFactory = $clientFactory;
    }

    public function create(Configuration $configuration): Api
    {
        $client = $this->clientFactory->create($configuration);

        return new Api(
            new Accounts($client, new ApiRequestHeadersFactory(), new PasswordResetBodyFactory())
        );
    }
}
