<?php

declare(strict_types=1);

namespace Tulo\Api\League\Grant;

use League\OAuth2\Client\Grant\AbstractGrant;

final class None extends AbstractGrant
{
    public const NAME = 'none';

    /**
     * @return string
     */
    protected function getName()
    {
        return self::NAME;
    }

    /**
     * @return array
     */
    protected function getRequiredRequestParameters()
    {
        return [];
    }
}
