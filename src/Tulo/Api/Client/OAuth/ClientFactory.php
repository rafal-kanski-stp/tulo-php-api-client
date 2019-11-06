<?php

declare(strict_types=1);

namespace Tulo\Api\Client\OAuth;

use Tulo\Api\Client\Configuration\Configuration;

interface ClientFactory
{
    public function create(Configuration $configuration): ClientInterface;
}
