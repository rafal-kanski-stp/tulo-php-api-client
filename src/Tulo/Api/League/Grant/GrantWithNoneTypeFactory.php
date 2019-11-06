<?php

declare(strict_types=1);

namespace Tulo\Api\League\Grant;

use League\OAuth2\Client\Grant\GrantFactory;

final class GrantWithNoneTypeFactory extends GrantFactory
{
    protected function registerDefaultGrant($name)
    {
        if ($name === None::NAME) {
            return $this->setGrant($name, new None());
        }

        return parent::registerDefaultGrant($name);
    }
}
