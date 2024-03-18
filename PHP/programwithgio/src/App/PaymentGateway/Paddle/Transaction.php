<?php

declare(strict_types=1);

namespace app\PaymentGateway\Paddle;

use App\Enums\Status;

class Transaction
{

    //    private string $status = 'pending';
    private string $status;
    public function __construct()
    {
//        var_dump(Transaction::STATUS_PAID);
        $this->setStatus(Status::PENDING);
//        var_dump(self::STATUS_PAID);
    }

    public function setStatus(string $status): self // Transaction
    {
        if (! isset(Status::ALL_STATUSES[$status])) {
            throw new \InvalidArgumentException('Invalid status');
        }
        $this->status = $status;

        return $this;
    }
}