<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;


Route::get('/', function () {

//    $jobs = Job::all();
//    dd($jobs); // отображение объекта с данными из БД
//    dd($jobs[0]->title); // отображение конкретного значения из объекта с данными с БД

    return view('home');
});


// Создание маршрута /jobs, который возвращает представление jobs
Route::get('/jobs', function () {

//     $jobs = Job::all(); // Стандартное использование c ленивой (отложенной загрузкой)

    // Решение проблемы N+1 использование жадной загрузки через оператор WITH
    $jobs = Job::with('employer')->get();

    return view('jobs',[
        'jobs' => $jobs
    ]);
});

Route::get('/jobs/{id}', function ($id){

    $job = Job::find($id);

    return view('job', ['job' => $job]);

});

// Практика: создание маршрута страницы контактов
Route::get('/contact', function () {
    return view('contact');
});
