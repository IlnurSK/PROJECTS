<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

// Обновление метода отображения home страницы через view
Route::view('/', 'home');
// Практика: создание маршрута страницы контактов
Route::view('/contact', 'contact');

// Группировка всех маршрутов с помощью метода resource, по стандарту RESTful
Route::resource('jobs', JobController::class);

// Auth. Аутентификация
Route::get('/register', [RegisteredUserController::class, 'create']);
Route::post('/register', [RegisteredUserController::class, 'store']);

Route::get('/login', [SessionController::class, 'create']);
Route::post('/login', [SessionController::class, 'store']);
Route::post('/logout', [SessionController::class, 'destroy']);

