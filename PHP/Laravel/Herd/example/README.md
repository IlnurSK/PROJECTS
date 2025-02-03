# Документация по обучению Laravel

## Команды терминала, вводятся в директории проекта Laravel
`laravel new example` - создать новый проект где `example` имя проекта.

`php artisan` - мощный консольный инструмент Laravel, данная команда выведет список всех доступных команд

`php artisan serve` - запуск локального сервера с проектом

`php artisan db:show` - вывести все таблицы БД с данным проектом

`php artisan migrate` - провести миграции таблиц БД, если их нет, то создаст стандартные таблицы

`php artisan migrate:refresh` - сбросить строки в таблицах и перезапустить все миграции в БД

`php artisan migrate:rollback` - откат на прошлую миграцию

`php artisan migrate:fresh` - удалить все таблицы и перезапустить все миграции

`php artisan make:migration name` - создание нового файла миграции, где `name` - название для миграции, например можно указать `create_test_table` - для создания таблицы `test`

`php artisan make:factory JobFactory` - создание фабрики для модели Job

`php artisan vendor:publish` - используется для публикации файлов, которые поставляются с пакетами (включая файлы конфигурации, миграции, языковые файлы, шаблоны и другие ресурсы). Эти файлы обычно находятся в директории vendor и недоступны для редактирования напрямую, так как она управляется Composer.

`php artisan db:seed` - использование автоматического заполнения данных в модель, используя стандартную конфигурацию в файле DatabaseSeeder.php

`php artisan db:seed --class=JobSeeder` - использование автоматического заполнения только для класса JobSeeder, игнорируя остальные Seeders

`php artisan migrate:fresh --seed` - обновление миграций таблиц с опцией `--seed`, чтобы сразу заполнить данные в модель

`php artisan tinker` - терминальная PHP песочница для приложения Laravel, позволяет взаимодействовать с проектом напрямую используя стандартные PHP команды 

## PHP ARTISAN TINKER (командны которые использовались в данной теме обучения)

`App\Models\Job::create(['title' => 'Acme Director', 'salary' => '$1,000,000']);` - добавление в модель Job новой строки с `title` = `Acme Director`, `salary` = `$1,000,000`

`App\Models\Job::all()` - вернуть все строки с модели Job

`App\Models\Job::find(id)` - вернуть строку с модели Job, где вместо `id` можно указать `id `нужной строки

`App\Models\Job::find(7)->delete();` - удалить строку с модели Job с `id` = 7

`App\Models\User::factory()->create();` - использовать фабрику для создания строки в модели User

`App\Models\User::factory(100)->create();` - добавив параметр в `factory(100)`, можно сгенерировать сразу необходимое количество строк в модели (100)

`App\Models\User::factory()->unverified()->create();` - использовать фабрику для элементов с другим состоянием (state), которое описывается в методе `unverified()` фабрики

`$job = App\Models\Job::first();` - метод first() получает первую строку в модели Job

`$tag = App\Models\Tag::find(1);` - создать объект $tag с моделью Tag (id=1)

`$tag->jobs()->attach(App\Models\Job::find(7));` - добавить в модель Tag через команду attach() связанную строку с модели Job (id=7)

`$tag->jobs()->get();` - метод get(), делает явный запрос к модели

`$tag->jobs()->get()->pluck('title');` - метод pluck('title') - указывает на конкретный столбец в необходимой модели

`$jobs = Job::with('employer')->latest()->cursorPaginate(3);` - метод latest() отсортирует по метке создания записи




