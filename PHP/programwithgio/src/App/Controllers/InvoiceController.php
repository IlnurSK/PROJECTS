<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Invoice;
use App\View;

class InvoiceController
{
    public function index(): View
    {
//        unset($_SESSION['count']);
//        return 'Invoices';
//        return '';
        return View::make('invoices/index');
    }

    public function create(): View
    {
//        return 'Create Invoice';
//        return '<form action="/invoices/create" method="post"><label>Amount</label><input type="text" name="amount"></form>';
//        return '';
        return View::make('invoices/create');
    }

    public function store(): void
    {
        $invoice = new Invoice();
        $amount = $_POST['amount'];
        $invoice->store($amount);
        var_dump($amount);
    }
}