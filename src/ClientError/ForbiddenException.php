<?php

namespace PoK\Exception\ClientError;

class ForbiddenException extends \Exception
{
    public function __construct(string $message = null, \Throwable $previous = NULL)
    {
        parent::__construct(
            $message
                ? $message
                : 'FORBIDDEN',
            403,
            $previous
        );
    }
}
