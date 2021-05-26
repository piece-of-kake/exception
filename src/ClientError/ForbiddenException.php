<?php

namespace PoK\Exception\ClientError;

class ForbiddenException extends \Exception
{
    public function __construct(\Throwable $previous = NULL) 
    {
        parent::__construct('FORBIDDEN', 403, $previous);
    }
}
