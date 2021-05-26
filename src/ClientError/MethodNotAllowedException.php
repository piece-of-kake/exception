<?php

namespace PoK\Exception\ClientError;

class MethodNotAllowedException extends \Exception
{
    public function __construct(\Throwable $previous = NULL) 
    {
        parent::__construct('METHOD_NOT_ALLOWED', 405, $previous);
    }
}