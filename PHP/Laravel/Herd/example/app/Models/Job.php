<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * @method static \Illuminate\Database\Eloquent\Builder|Job create(array $attributes = [])
 * @method static find($id)
 */

class Job extends Model
{
    use HasFactory;

    // Подключение библиотеки Фабрики (для генерации данных)

    // Eloquent автоматически будет искать таблицу JOBS в БД (которое занята по дефолту), в нашем случае она называется jobs_listings, поэтому класс можно переименовать например в JobListing (в ед. числе), ну или альтернативный вариант
    protected $table = 'job_listings'; // алт. вариант - указание конкретной таблицы через $table = 'table_name

    // задание атрибутов которые можно заполнять массово
//    protected $fillable = ['employer_id', 'title', 'salary'];

// можно выключить ограничение fillable, создав переменную $guarder c пустым массивом
protected $guarded = [];

// Подключение внешнего ключа - отношения с таблицей Employer
    public function employer()
    {
        return $this->belongsTo(Employer::class);
    }

    public function tags()
    {
        // foreignPivotKey - явно указывает имя внешнего столбца, по дефолту Laravel будет искать в job_id
        return $this->belongsToMany(Tag::class, foreignPivotKey: "job_listing_id");
    }

}


