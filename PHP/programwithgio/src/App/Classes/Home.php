<?php

declare(strict_types=1);

namespace App\Classes;

use App\View;

class Home
{
    public function index(): string
    {
        setcookie(
            'userName',
            'Gex',
            time() + (24 * 60 * 60)
//            '/',
//            '',
//            false,
//            false
        );
        $_SESSION['count'] = ($_SESSION['count'] ?? 0) + 1;
//        return View::make('index', $_GET)->render();
        return 'Home ';
    }
}