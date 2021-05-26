<?php

namespace PoK\Exception\ClientError;

class UnauthorizedException extends \Exception
{
    public function __construct(\Throwable $previous = NULL) 
    {
        parent::__construct('UNAUTHORIZED', 401, $previous);
    }
}
