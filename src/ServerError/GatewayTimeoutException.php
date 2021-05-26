<?php

namespace PoK\Exception\ServerError;

class GatewayTimeoutException extends \Exception
{
    public function __construct(\Throwable $previous = NULL) 
    {
        parent::__construct('GATEWAY_TIMEOUT', 504, $previous);
    }
}
