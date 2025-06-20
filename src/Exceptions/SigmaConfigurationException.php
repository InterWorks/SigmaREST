<?php

namespace InterWorks\SigmaREST\Exceptions;

use Exception;

class SigmaConfigurationException extends Exception
{
    public function __construct(string $message = "Sigma configuration is invalid or missing", int $code = 0, ?Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}