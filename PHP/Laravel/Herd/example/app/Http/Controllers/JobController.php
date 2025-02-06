<?php

namespace App\Http\Controllers;

use App\Mail\JobPosted;
use App\Models\Job;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Mail;

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
        $job = Job::create([
            'title' => request('title'),
            'salary' => request('salary'),
            'employer_id' => 1
        ]);

        // Подключение почтового класса, и отправка сообщения о публикации пользователю на почту, используя синхронный метод SYNC - send()
//        Mail::to($job->employer->user)->send(
//            new JobPosted($job)
//        );

        // Альтернативный вариант, используем систему очередей queue
        Mail::to($job->employer->user)->queue(
            new JobPosted($job)
        );


        return redirect('/jobs');
    }

    public function edit(Job $job)
    {
//        // Проверка на авторизацию пользователя, если нет то редирект на страницу авторизации (если используется шлюз (GATE), то данная логика не нужна)
//        if (Auth::guest()) {
//            return redirect('/login');
//        }

//        // Проверка: Если авторизованному пользователю не принадлежит данный работодатель, то запретить редактировать вакансию (если используется шлюз (GATE), то данная логика не нужна)
//        if ($job->employer->user->isNot(Auth::user())) {
//            abort(403);
//        }

        // Если шлюз edit-job вернет true, авторизовать пользователя
        Gate::authorize('edit-job', $job);


        // Альтернативный вариант доступа к шлюзу через метод Auth::user()->can()
//        Auth::user()->can('edit-job', $job);

        return view('jobs.edit', ['job' => $job]);
    }

    public function update(Job $job)
    {
        // Авторизация
        // Если шлюз edit-job вернет true, авторизовать пользователя
        Gate::authorize('edit-job', $job);

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
        // Если шлюз edit-job вернет true, авторизовать пользователя
//        Gate::authorize('edit-job', $job);

        // удаление вакансии
//    Job::findOrFail($id)->delete();
        $job->delete();

        // перенаправление на страницу с вакансиями
        return redirect('/jobs');
    }
}
