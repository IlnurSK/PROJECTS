<?php

namespace App;

class Invoice // extends Mail // extends Customer
{
    use Mail;
    public function process()
    {
        echo 'Processed invoice' . PHP_EOL;

        // send email
        $this->sendEmail();
    }
}