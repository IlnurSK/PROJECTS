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

    $jobs = Job::with('employer')->latest()->cursorPaginate(3);

    return view('jobs.index', [
        'jobs' => $jobs
    ]);
});

// При создании следующего маршрута, он не будет работать если будет стоять после маршрута Route::get('/jobs/{id}'
Route::get('/jobs/create', function () {
//    dd('hello there');
    return view('jobs.create');
});

Route::get('/jobs/{id}', function ($id) {
    $job = Job::find($id);

    return view('jobs.show', ['job' => $job]);
});

// Создание маршрута для POST метода для модели JOB
Route::post('/jobs', function () {
//   dd('hello from the post request');
//    dd(request()->all());

    // использование Laravel для получения данных из POST и передача в модель
    Job::create([
        'title' => request('title'),
        'salary' => request('salary'),
        'employer_id' => 1
    ]);

    return redirect('/jobs');
});


// Практика: создание маршрута страницы контактов
Route::get('/contact', function () {
    return view('contact');
});
