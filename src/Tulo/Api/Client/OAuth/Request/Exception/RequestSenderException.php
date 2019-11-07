<?php

declare(strict_types=1);

namespace Tulo\Api\Client\OAuth\Request\Exception;

use Exception;
use RuntimeException;

final class RequestSenderException extends RuntimeException
{
    public static function createFromPrevious(Exception $exception): self
    {
        return new self($exception->getMessage(), $exception->getCode(), $exception);
    }
}
