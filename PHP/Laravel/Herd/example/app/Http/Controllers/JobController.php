<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    // создаем методы взаимодействия с ресурсом index/create/show/store/edit/update/destroy

    public function index()
    {
        $jobs = Job::with('employer')->latest()->simplePaginate(3);

        return view('jobs.index', [
            'jobs' => $jobs
        ]);
    }

    public function create()
    {
        return view('jobs.create');
    }

    public function show(Job $job)
    {
        return view('jobs.show', ['job' => $job]);
    }

    public function store()
    {
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
    }

    public function edit(Job $job)
    {
        return view('jobs.edit', ['job' => $job]);
    }

    public function update(Job $job)
    {
        // Авторизация

        // Валидация
        request()->validate([
            'title' => ['required', 'min:3'],
            'salary' => ['required']
        ]);

        // Обновить вакансию
        // стандартный метод
//    $job = Job::findOrFail($id); // Если $id не найдется в БД, будет выброшено исключение. Для этого используется метод findOrFail

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
    }

    public function destroy(Job $job)
    {
        // авторизация

        // удаление вакансии
//    Job::findOrFail($id)->delete();
        $job->delete();

        // перенаправление на страницу с вакансиями
        return redirect('/jobs');
    }
}
