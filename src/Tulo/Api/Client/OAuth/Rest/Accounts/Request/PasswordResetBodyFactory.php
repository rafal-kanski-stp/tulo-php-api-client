<?php

declare(strict_types=1);

namespace Tulo\Api\Client\OAuth\Rest\Accounts\Request;

use Tulo\Api\Client\Configuration\Data\Email;
use Tulo\Api\Client\Configuration\Request\Body;

final class PasswordResetBodyFactory
{
    private const BODY_PATTERN = '{
        "email":"%s"
    }';

    public function create(Email $email): Body
    {
        return new Body(sprintf(self::BODY_PATTERN, $email->get()));
    }
}
