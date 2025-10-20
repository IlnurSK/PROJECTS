<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Employer extends Model
{
    /** @use HasFactory<\Database\Factories\EmployerFactory> */
    use HasFactory;

    public function jobs()
    {
        return $this->hasMany(Job::class);
    }

    // Добавляем связь Employer->User
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
