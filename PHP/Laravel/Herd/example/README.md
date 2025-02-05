# Документация по обучению Laravel

## SQLite команды для БД

`PRAGMA foreign_keys=on` - включает поддержку внешних ключей (foreign keys). Внешние ключи используются для обеспечения целостности данных между связанными таблицами в реляционных базах данных (по умолчанию выключена)

## DebugBar Laravel - панель отладки для проекта

`composer require barryvdh/laravel-debugbar --dev` - установка отладочной панели через composer в проект, конфигурирование происходит в файле .env, константа APP_DEBUG=true/false

## Команды терминала, вводятся в директории проекта Laravel
`laravel new example` - создать новый проект где `example` имя проекта. Опционально можно выбрать стартовый пакет модуля авторизации (Laravel Breeze), рекомендуется использовать только в новом проекте. Также можно указать какой стак технологий используется в проекте (Blade with Alpine/React/Vue/Livewire)

`php artisan` - мощный консольный инструмент Laravel, данная команда выведет список всех доступных команд

`php artisan help command_name` - получить справку по команде, где вместо command_name нужно указать необходимую команду 

`php artisan serve` - запуск локального сервера с проектом

`php artisan db:show` - вывести все таблицы БД с данным проектом

`php artisan db:seed` - использование автоматического заполнения данных в модель, используя стандартную конфигурацию в файле DatabaseSeeder.php

`php artisan db:seed --class=JobSeeder` - использование автоматического заполнения только для класса JobSeeder, игнорируя остальные Seeders

`php artisan make:model Model_name` - создать новую модель, где Model_name - имя новой модели

`php artisan make:model Model_name -m` - та же команда, что и в строке выше, но с опцией `-m` которая сразу же создаст файл миграции для данной модели

`php artisan make:migration name` - создание нового файла миграции, где `name` - название для миграции, например можно указать `create_test_table` - для создания таблицы `test`

`php artisan make:factory JobFactory` - создание фабрики для модели Job

`php artisan make:controller` - создать контроллер для ресурса/API/функции и тд

`php artisan make:policy` - создать политику к модели

`php artisan make:mail` - создать почтовый класс (Mailable class)

`php artisan make:job` - создание класса Job (заданий), который в дальнейшем можно использовать в системе очередей

`php artisan migrate` - провести миграции таблиц БД, если их нет, то создаст стандартные таблицы

`php artisan migrate:refresh` - сбросить строки в таблицах и перезапустить все миграции в БД

`php artisan migrate:rollback` - откат на последнюю миграцию

`php artisan migrate:fresh` - удалить все таблицы и перезапустить все миграции

`php artisan migrate:fresh --seed` - обновление миграций таблиц с опцией `--seed`, чтобы сразу заполнить данные в модель

`php artisan queue:work` - запустить Worker для выполнения задач из очереди

`php artisan route:list` - отобразить список всех маршрутов

`php artisan route:list --except-vendor` - отобразить список всех маршрутов, с опцией исключения дополнительных модулей

`php artisan vendor:publish` - используется для публикации файлов, которые поставляются с пакетами (включая файлы конфигурации, миграции, языковые файлы, шаблоны и другие ресурсы). Эти файлы обычно находятся в директории vendor и недоступны для редактирования напрямую, так как она управляется Composer.

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

`php artisan make:controller RegisteredUserController` - создаем контроллер для регистрации пользователей

`php artisan make:controller SessionController` - создаем контроллер для логирования пользователей

`$user = new App\Models\User;` - создаем пользователя

`$user->password = 'password';` - вводим поле пароля











