<?php

namespace App;

class Customer // extends Mail
{
    use Mail;
    public function updateProfile()
    {
        echo 'Profile updated' . PHP_EOL;

        // send email
        $this->sendEmail();
    }

//    public function sendEmail()
//    {
//        echo 'Sending Email' . PHP_EOL;
//    }
}