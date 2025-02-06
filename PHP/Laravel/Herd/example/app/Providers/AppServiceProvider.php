<?php

namespace App\Providers;

use App\Models\Job;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Выключение использование метода отложенной загрузки
        Model::preventLazyLoading();

        // Настройка представления для PAGINATION
//        Paginator::useBootstrapFive();

        // Установка шлюза (GATE), для проверки критериев допуска к редактированию вакансий
//        Gate::define('edit-job', function (User $user, Job $job) {
//            // Проверка: Если авторизованному пользователю принадлежит данный работодатель, то разрешить редактировать вакансию
//            return $job->employer->user->is($user);
//        });
    }
}
