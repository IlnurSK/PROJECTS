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
//    $jobs = Job::with('employer')->get();

    // Использование метода PAGINATE для разбивки вывода на страницы
//    $jobs = Job::with('employer')->paginate(3);

    // Использование метода SIMPLEPAGINATE для разбивки вывода на страницы, но без счетчика страниц (уменьшает запросы к БД)
//    $jobs = Job::with('employer')->simplePaginate(3);

    // Использование метода CURSORPAGINATE для разбивки вывода на страницы, но с курсорным указанием страниц (уменьшает запросы к БД), самый эффективный метод, но невозможно переключать страницы вручную через URL
    $jobs = Job::with('employer')->cursorPaginate(3);

    return view('jobs', [
        'jobs' => $jobs
    ]);
});

Route::get('/jobs/{id}', function ($id) {
    $job = Job::find($id);

    return view('job', ['job' => $job]);
});

// Практика: создание маршрута страницы контактов
Route::get('/contact', function () {
    return view('contact');
});
