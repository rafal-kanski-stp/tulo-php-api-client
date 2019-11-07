<?php

declare(strict_types=1);

namespace Tulo\Api\Client\Configuration\Data;

final class Email
{
    private $email;

    public function __construct(string $email)
    {
        $this->email = $email;
    }

    public function get(): string
    {
        return $this->email;
    }
}
