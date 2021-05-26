<?php

namespace PoK\Exception\ClientError;

class BadRequestException extends \Exception
{
    public function __construct(string $message = null, \Throwable $previous = NULL) 
    {
        parent::__construct(
            $message
                ? $message
                : 'BAD_REQUEST',
            400,
            $previous
        );
    }
}