<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//// Можно вернуть массив (полезно для использования API, данные передаются в виде массива
//Route::get('/about', function () {
//    return ['foo' => 'bar'];
//});

// Создание маршрута /about, который возвращает представление about
Route::get('/about', function () {
    return view('about');
});

// Практика: создание маршрута страницы контактов
Route::get('/contact', function () {
    return view('contact');
});
