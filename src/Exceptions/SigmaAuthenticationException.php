<?php

namespace InterWorks\SigmaREST\Exceptions;

use Exception;

class SigmaAuthenticationException extends Exception
{
    public function __construct(string $message = "Sigma authentication failed", int $code = 0, ?Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}