<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Job extends Model
{
    use HasFactory;

    // Подключение библиотеки Фабрики (для генерации данных)

    // Eloquent автоматически будет искать таблицу JOBS в БД (которое занята по дефолту), в нашем случае она называется jobs_listings, поэтому класс можно переименовать например в JobListing (в ед. числе), ну или альтернативный вариант
    protected $table = 'job_listings'; // алть. вариант - указание кокретной таблицы через $table = 'table_name

    // задание атрибутов которые можно заполнять массово
    protected $fillable = ['title', 'salary'];


// Подключение внешнего ключа - отношения с таблицей Employer
    public function employer()
    {
        return $this->belongsTo(Employer::class);
    }

}


