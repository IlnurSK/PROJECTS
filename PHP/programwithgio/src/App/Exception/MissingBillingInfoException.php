<?php

namespace App\Exception;

class MissingBillingInfoException extends \Exception
{
//    /**
//     * @param string $string
//     */
//    public function __construct(string $string)
//    {
//    }
    protected $message = 'Missing billing information';
}