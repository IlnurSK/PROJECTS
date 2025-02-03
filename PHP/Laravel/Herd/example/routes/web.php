<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;


Route::get('/', function () {
    return view('home');
});


// Создание маршрута /jobs, который возвращает представление jobs
Route::get('/jobs', function () {

    $jobs = Job::with('employer')->latest()->cursorPaginate(3);

    return view('jobs.index', [
        'jobs' => $jobs
    ]);
});

// Страница создания вакансии. При создании следующего маршрута, он не будет работать если будет стоять после маршрута Route::get('/jobs/{id}'
Route::get('/jobs/create', function () {
    return view('jobs.create');
});

// Страница вакансии
Route::get('/jobs/{id}', function ($id) {
    $job = Job::find($id);

    return view('jobs.show', ['job' => $job]);
});

// Создание маршрута для POST метода для модели JOB
Route::post('/jobs', function () {

    // запуск валидации для проверки введенных данных
    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required']
    ]);

    // использование Laravel для получения данных из POST и передача в модель
    Job::create([
        'title' => request('title'),
        'salary' => request('salary'),
        'employer_id' => 1
    ]);

    return redirect('/jobs');
});

// Форма для редактирования вакансии
Route::get('/jobs/{id}/edit', function ($id) {
    $job = Job::find($id);

    return view('jobs.edit', ['job' => $job]);
});

// Страница обновления вакансии
Route::patch('/jobs/{id}', function ($id) {
    // Валидация
    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required']
    ]);

    // Авторизация

    // Обновить вакансию
    $job = Job::findOrFail($id); // Если $id не найдется в БД, будет выброшено исключение. Для этого используется метод findOrFail

    // стандартный метод
//    $job->title = request('title');
//    $job->salary = request('salary');
//    $job->save();

    // альтернативный метод
    $job->update([
        'title' => request('title'),
        'salary' => request('salary'),
    ]);

    // Перенаправление на страницу с вакансией
    return redirect('/jobs/' . $job->id);
});

// Страница удаления вакансии
Route::delete('/jobs/{id}', function ($id) {
    // авторизация

    // удаление вакансии
    Job::findOrFail($id)->delete();

    // перенаправление на страницу с вакансиями
    return redirect('/jobs');
});


// Практика: создание маршрута страницы контактов
Route::get('/contact', function () {
    return view('contact');
});
