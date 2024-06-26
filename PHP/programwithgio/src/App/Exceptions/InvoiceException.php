<?php

namespace App\Exceptions;

class InvoiceException extends \Exception
{

    public static function missingBillingInfo(): static
    {
        return new static('Missing billing info');
    }

    public static function invalidAmount()
    {
        return new static('Invalid invoice amount');    }
}