<?php

declare(strict_types=1);

namespace Tulo\Api\Client\OAuth\Rest;

use Tulo\Api\Client\OAuth\Rest\Accounts\Accounts;

final class Api
{
    private $accounts;

    public function __construct(Accounts $accounts)
    {
        $this->accounts = $accounts;
    }

    public function accounts(): Accounts
    {
        return $this->accounts;
    }
}
