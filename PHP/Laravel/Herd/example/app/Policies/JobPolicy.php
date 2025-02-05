<?php

namespace App\Policies;

use App\Models\Job;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class JobPolicy
{
    public function edit(User $user, Job $job): bool
    {
        // Проверка: Если авторизованному пользователю принадлежит данный работодатель, то разрешить редактировать вакансию
        return $job->employer->user->is($user);
    }
}
