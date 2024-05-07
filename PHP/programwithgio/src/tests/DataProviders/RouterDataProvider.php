<?php

namespace Tests\DataProviders;

class RouterDataProvider
{
    public static function routeNotFoundCasesProvider(): array
    {
        return [
            ['/users', 'put'],
            ['/invoices', 'post'],
            ['/users', 'get'],
            ['/users', 'post'],
        ];
    }

}