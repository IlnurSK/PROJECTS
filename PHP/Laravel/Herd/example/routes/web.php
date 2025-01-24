<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

//// Можно вернуть массив (полезно для использования API, данные передаются в виде массива
//Route::get('/about', function () {
//    return ['foo' => 'bar'];
//});

// Создание маршрута /jobs, который возвращает представление jobs
Route::get('/jobs', function () {
    return view('jobs',[
//        'greeting' => 'Hello', // эквивалент создания переменной $greeting = 'Hello'
//        'name' => 'Yuriy Borisov'
        'jobs' => [
            [
                'id' => 1,
                'title' => 'Director',
                'salary' => '$50,000'
            ],
            [
                'id' => 2,
                'title' => 'Programmer',
                'salary' => '10,000'
            ],
            [
                'id' => 3,
                'title' => 'Teacher',
                'salary' => '40,000'
            ]
        ]
    ]);
});

Route::get('/jobs/{id}', function ($id) {
    $jobs = [
        [
            'id' => 1,
            'title' => 'Director',
            'salary' => '$50,000'
        ],
        [
            'id' => 2,
            'title' => 'Programmer',
            'salary' => '10,000'
        ],
        [
            'id' => 3,
            'title' => 'Teacher',
            'salary' => '40,000'
        ]
    ];

    $job = Arr::first($jobs, fn($job) => $job['id'] == $id);

    return view('job', ['job' => $job]);

});

// Практика: создание маршрута страницы контактов
Route::get('/contact', function () {
    return view('contact');
});
