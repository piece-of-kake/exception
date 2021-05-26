<?php

namespace PoK\Exception\ServerError;

class InternalServerErrorException extends \Exception
{
    public function __construct(string $message = null, \Throwable $previous = NULL) 
    {
        parent::__construct(
            $message
                ? $message
                : 'INTERNAL_SERVER_ERROR',
            500,
            $previous
        );
    }
}
