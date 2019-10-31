<?php

declare(strict_types=1);

namespace Tulo\Api\Client\AccessToken\Exception;

use Exception;
use RuntimeException;

final class CouldNotProvideAccessTokenException extends RuntimeException
{
    public static function createFromPrevious(Exception $exception): self
    {
        return new self($exception->getMessage(), $exception->getCode(), $exception);
    }
}
