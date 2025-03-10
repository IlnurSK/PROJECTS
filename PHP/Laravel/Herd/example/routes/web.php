<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use App\Jobs\TranslateJob;
use App\Models\Job;
use Illuminate\Support\Facades\Route;

Route::get('test', function () {

    // Функция диспетчеризации задач, для отправки ее в очередь
//    dispatch(function () {
//        logger('hello from the queue!');
//    })->delay(5);

    // Использование класса заданий, альтернативный вариант
    $job = Job::first();
    TranslateJob::dispatch($job);

    return 'Done';
});

// Обновление метода отображения home страницы через view
Route::view('/', 'home');
// Практика: создание маршрута страницы контактов
Route::view('/contact', 'contact');

// Группировка всех маршрутов с помощью метода resource, по стандарту RESTful
//Route::resource('jobs', JobController::class)->middleware('auth');

// Маршрутизация вакансий
Route::get('/jobs', [JobController::class, 'index']);
Route::get('/jobs/create', [JobController::class, 'create']);
Route::post('/jobs', [JobController::class, 'store'])->middleware('auth');
Route::get('/jobs/{job}', [JobController::class, 'show']);

Route::get('/jobs/{job}/edit', [JobController::class, 'edit'])
    ->middleware('auth') // Проверка на авторизацию пользователя
    ->can('edit-job', 'job'); // Проверка права редактирования у пользователя

// Альтернативный вариант промежуточного ПО через массив
//Route::get('/jobs/{job}/edit', [JobController::class, 'edit'])->middleware(['auth', 'can:edit-job,job']);

Route::patch('/jobs/{job}', [JobController::class, 'update'])
    ->middleware('auth') // Проверка на авторизацию пользователя
    ->can('edit', 'job'); // Проверка права редактирования у пользователя через политику edit
//    ->can('edit-job', 'job'); // Альтернативная проверка права редактирования у пользователя через шлюз edit-job

Route::delete('/jobs/{job}', [JobController::class, 'destroy'])
    ->middleware('auth') // Проверка на авторизацию пользователя
    ->can('edit-job', 'job'); // Проверка права редактирования у пользователя

// Auth. Аутентификация
Route::get('/register', [RegisteredUserController::class, 'create']);
Route::post('/register', [RegisteredUserController::class, 'store']);

Route::get('/login', [SessionController::class, 'create'])->name('login');
Route::post('/login', [SessionController::class, 'store']);
Route::post('/logout', [SessionController::class, 'destroy']);

