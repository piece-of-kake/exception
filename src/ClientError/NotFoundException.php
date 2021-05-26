<?php

namespace PoK\Exception\ClientError;

class NotFoundException extends \Exception
{
    public function __construct(\Throwable $previous = NULL) 
    {
        parent::__construct('NOT_FOUND', 404, $previous);
    }
}