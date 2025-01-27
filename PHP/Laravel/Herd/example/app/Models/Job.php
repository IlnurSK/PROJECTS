<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job extends Model { // Eloquent автоматически будет искать таблицу JOBS в БД (которое занята по дефолту), в нашем случае она называется jobs_listings, поэтому класс можно переименовать например в JobListing (в ед. числе), ну или альтернативный вариант
    protected $table = 'job_listings'; // алть. вариант - указание кокретной таблицы через $table = 'table_name

    // задание атрибутов которые можно заполнять массово
    protected $fillable = ['title', 'salary'];

}
