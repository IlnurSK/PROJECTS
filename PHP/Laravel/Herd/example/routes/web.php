<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('home');
//});
// Обновление метода отображения home страницы через view
Route::view('/', 'home');

// Группировка всех маршрутов ресурса Job
//Route::controller(JobController::class)->group(function () {
//    // Index.
//    Route::get('/jobs', 'index');
//    // Create.
//    Route::get('/jobs/create', 'create');
//    // Show.
//    Route::get('/jobs/{job}', 'show');
//    // Store.
//    Route::post('/jobs', 'store');
//    // Edit.
//    Route::get('/jobs/{job}/edit', 'edit');
//    // Update.
//    Route::patch('/jobs/{job}', 'update');
//    // Destroy.
//    Route::delete('/jobs/{job}', 'destroy');
//});

// Группировка всех маршрутов с помощью метода resource, по стандарту RESTful
Route::resource('jobs', JobController::class);

// Практика: создание маршрута страницы контактов
//Route::get('/contact', function () {
//    return view('contact');
//});
Route::view('/contact', 'contact');
