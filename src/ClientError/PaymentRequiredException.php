<?php

namespace PoK\Exception\ClientError;

class PaymentRequiredException extends \Exception
{
    public function __construct(\Throwable $previous = NULL) 
    {
        parent::__construct('PAYMENT_REQUIRED', 402, $previous);
    }
}