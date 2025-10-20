# Проект Pixel Positions

## Ключевые/базовые этапы в разработке проекта

1. В терминале создаем проект `laravel new pixel-positions`. Опции - `No starter kit/Pest/GIT-Yes/SQLite/Migrations-Yes`
2. Скачиваем лого проекта с шаблона, сохраняем в `resources/images/logo.svg`
3. Создаем основной макет проекта `resources/view/components/layout.blade.php`
4. В `layout.blade.php` создаем базовую `html:5` страницу
5. В `layout.blade.php` создаем в теле `<body>` в контейнере `<div>` меню навигации `<nav>` основной раздел `<main>`
6. В `<main>` добавляем слот `{{ $slot }}`
7. В раздел `<nav>` добавляем 3 контейнера `<div>` для лого/ссылок навигации/кнопка добавления вакансий
8. В первый контейнер меню навигации добавляем ссылку на логотип, используя класс фасада `Vite`, и его метод `asset()`, в котором указываем путь до файла
```html
<a href="">
   <img src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/logo.svg') }}">
</a>
```
9. Устанавливаем пакет зависимостей проекта `npm install`
10. Запускам сервер Vite `npm run dev`
11. В `layout.blade.php` в заголовке `<head>` подключаем путь к ресурсам JS для сервера vite `@vite(['resources/js/app.js'])`
12. Очищаем файл стандартного шаблона Laravel `views/welcome.blade.php`
13. Вставляем ссылку на наш макет
```bladehtml
<x-layout>
    Hello world
</x-layout>
```
14. В файле `resources/js/app.js` подключаем каталог с изображениями
```javascript
import.meta.glob([
    '../images/**'
]);
```
15. В терминале запускаем `npm run build` для проверки работы сборщика, проверяем работоспособность проекта
16. В `layout.blade.php` в первом контейнере навигации с логотипом, указываем в ссылке корневой адрес `<a href="/">`
17. Там же создаем разметку второго контейнера навигации
```html

<div>
    <a href="#">Jobs</a>
    <a href="#">Careers</a>
    <a href="#">Salaries</a>
    <a href="#">Companies</a>
</div>
```
18. В третьем контейнере создаем ссылку на публикацию вакансий
````html
<div>
    <a href="">Post a Job</a>
</div>
````
19. Подключаем к проекту `TailwindCSS`, следуя инструкции на официальном сайте [TailwindCSS](https://v3.tailwindcss.com/docs/guides/laravel). В моем случае используется `Laravel Framework 11.41.3`, в котором `TailwindCSS` поставляется в сборе, и его не нужно дополнительно устанавливать
20. В `layout.blade.php` в заголовке `<head>` добавляем путь к ресурсам CSS для сервера vite `@vite(['resources/css/app.css','resources/js/app.js'])`
21. Добавляем класс в контейнер `<nav>` flex с параметрами
````html
<nav class="flex justify-between items-center py-4 border-b border-white/10">
````
22. В файле `tailwind.config.js` добавляем кастомный цвет:
````javascript
theme: {
        extend: {            
            colors: {
                "black": "#060606"
            }
        },    
````
23. В родительский контейнер `<div>` в котором находится `<nav>` добавляем отступ в 10px:
````bladehtml
<div class="px-10">
````
24. В тело страницы `<body>` добавляем CSS свойства:
````bladehtml
<body class="bg-black text-white">
````
25. Во второй контейнер навигации добавляем CSS свойства:
```bladehtml
<div class="space-x-6 font-bold">
    <a href="#">Jobs</a>
    <a href="#">Careers</a>
    <a href="#">Salaries</a>
    <a href="#">Companies</a>
</div>
```
26. В главный контейнер с контентом `<main>` добавляем свойства:
```bladehtml
<main class="mt-10 max-w-[968px] mx-auto">
```
27. Создадим макет карточек с вакансиями, создадим файл `resources/views/components/job-card.blade.php` и проведем верстку:
```bladehtml

<div class="p-4 bg-white/5 rounded-xl flex flex-col text-center">
    <div class="self-start text-sm">Laracasts</div>

    <div class="py-8 font-bold">
        <h3>Video Producer</h3>
        <p>Full Time - From $60,000</p>
    </div>

    <div class="flex justify-between items-center mt-auto">
        <div>
            <a href="#" class="bg-white/10 hover:bg-white/25 px-2 py-1 rounded-xl text-xs transition-colors duration-300">Tag</a>
            <a href="#" class="bg-white/10 hover:bg-white/25 px-2 py-1 rounded-xl text-xs transition-colors duration-300">Tag</a>
            <a href="#" class="bg-white/10 hover:bg-white/25 px-2 py-1 rounded-xl text-xs transition-colors duration-300">Tag</a>
        </div>

        <img src="https://dummyimage.com/42x42" alt="" class="rounded-xl">
    </div>
</div>

```
28. Создаем компонент для заголовка `resources/views/components/section-heading.blade.php`, добавляем туда его с главного макета:
```bladehtml
<div class="inline-flex items-center gap-x-2">
    <span class="w-2 h-2 bg-white inline-block"></span>

    <h3 class="font-bold text-lg">{{ $slot }}</h3>
</div>
```
29. Создаем компонент для тегов `resources/views/components/tag.blade.php`:
```bladehtml
<a href="#" class="bg-white/10 hover:bg-white/25 px-2 py-1 rounded-xl text-xs transition-colors duration-300">{{ $slot }}</a>
```
30. Заменяем их на этот компонент в шаблоне карточек `resources/views/components/job-card.blade.php`:
```bladehtml

<div class="flex justify-between items-center mt-auto">
    <div>
        <x-tag>Tag</x-tag>
        <x-tag>Tag</x-tag>
        <x-tag>Tag</x-tag>
    </div>
```
31. Оформляем основной макет `resources/views/welcome.blade.php`, добавляя туда созданные компоненты:
```bladehtml

<x-layout>
    <div class="space-y-10">
        <section>
            <x-section-heading>Featured Jobs</x-section-heading>

            <div class="grid lg:grid-cols-3 gap-8 mt-6">
                <x-job-card/>
                <x-job-card/>
                <x-job-card/>
            </div>
        </section>

        <section>
            <x-section-heading>Tags</x-section-heading>

            <div class="mt-6 space-x-1">
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
            </div>
        </section>

        <section>
            <x-section-heading>Recent Jobs</x-section-heading>
        </section>
    </div>
</x-layout>

```
32. Создаем макет карточки широкой версии `resources/views/components/job-card-wide.blade.php`
```bladehtml
<div class="p-4 bg-white/5 rounded-xl flex gap-x-6">
    <div>
        <img src="https://loremflickr.com/100/100?random={{ rand(0,100) }}" alt="" class="rounded-xl">
    </div>

    <div class="flex-1 flex flex-col">
        <a href="#" class="self-start text-sm text-gray-400">Laracasts</a>

        <h3 class="font-bold text-xl mt-3">Video Producer</h3>

        <p class="text-sm text-gray-400 mt-auto">Full Time - From $60,000</p>
    </div>

    <div>
        <x-tag>Tag</x-tag>
        <x-tag>Tag</x-tag>
        <x-tag>Tag</x-tag>
    </div>
</div>
```
33. Добавляем ссылку на этот шаблон на главном шаблоне `resources/views/welcome.blade.php`
```bladehtml
<section>
    <x-section-heading>Recent Jobs</x-section-heading>

    <div class="mt-6 space-y-6">
        <x-job-card-wide/>
        <x-job-card-wide/>
        <x-job-card-wide/>
    </div>
</section>
```
34. В макет `resources/views/components/layout.blade.php`, добавим подключение шрифта `Hanken Grotesk`, и применим его к телу страницы
```bladehtml
<title>Pixel Positions</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:ital,wght@0,100..900;1,100..900&family=Roboto&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>

<body class="bg-black text-white font-hanken-grotesk">
```
35. Подключим этот шрифт в конфигурации TailwindCSS `tailwind.config.js`
```javascript
theme: {
        extend: {
            fontFamily: {
                "hanken-grotesk": ["Hanken Grotesk", "sans-serif"],                
            },
            colors: {
                "black": "#060606"
            }
        },
    },
```
36. Выделим логотипы карточек в отдельный компонент `resources/views/components/employer-logo.blade.php`
```bladehtml
<img src="https://loremflickr.com/100/100?random={{ rand(0,100) }}" alt="" class="rounded-xl">
```
37. Создадим ссылку на него вместо изображения `<img>` в `resources/views/components/job-card-wide.blade.php` и `resources/views/components/job-card.blade.php`
```bladehtml
<x-employer-logo/>
```
38. В шаблоне логотипа `resources/views/components/employer-logo.blade.php` добавим возможность изменять размеры через свойства `@props`:
```bladehtml
@props(['width' => 90])
<img src="https://loremflickr.com/{{ $width }}/{{ $width }}?random={{ rand(0,100) }}" alt="" class="rounded-xl">
```
39. Добавим это свойство в макет `resources/views/components/job-card.blade.php`
```bladehtml
<x-employer-logo :width="42"/>
```
40. В файл конфигурации Tailwind `tailwind.config.js` добавим кастомный размер шрифта:
```javascript
theme: {
        extend: {
            fontFamily: {
                "hanken-grotesk": ["Hanken Grotesk", "sans-serif"],
                // sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                "black": "#060606"
            },
            fontSize: {
                "2xs": "0.625rem" // 10px
            }
        },
    },
```
41. Добавим новый размер в шаблоны тегов `resources/views/components/tag.blade.php`
```bladehtml
<a href="#" class="bg-white/10 hover:bg-white/25 px-3 py-1 rounded-xl text-2xs font-bold transition-colors duration-300">{{ $slot }}</a>
```
42. Добавим стиль при наведении на карточку в `resources/views/components/job-card.blade.php`
```bladehtml
<div class="p-4 bg-white/5 rounded-xl flex flex-col text-center border border-transparent hover:border-blue-800 group transition-colors duration-300">
    <div class="self-start text-sm">Laracasts</div>

    <div class="py-8">
        <h3 class="group-hover:text-blue-800 text-xl font-bold transition-colors duration-300">Video Producer</h3>
        <p class="text-sm mt-4">Full Time - From $60,000</p>
    </div>
```
43. Также добавим на широкие карточки `resources/views/components/job-card-wide.blade.php`
```bladehtml
<div class="p-4 bg-white/5 rounded-xl flex gap-x-6 border border-transparent hover:border-blue-800 group transition-colors duration-300">
    <div>
        <x-employer-logo/>
    </div>

    <div class="flex-1 flex flex-col">
        <a href="#" class="self-start text-sm text-gray-400">Laracasts</a>

        <h3 class="font-bold text-xl mt-3 group-hover:text-blue-800 transition-colors duration-300">Video Producer</h3>
```
44. Создадим шаблон панелей `resources/views/components/panel.blade.php`
```bladehtml
@php
$classes = 'p-4 bg-white/5 rounded-xl border border-transparent hover:border-blue-800 group transition-colors duration-300';
@endphp


<div {{ $attributes(['class' => $classes]) }}>
{{ $slot }}
</div>
```
45. Применим его в `resources/views/components/job-card-wide.blade.php`
```bladehtml
<x-panel class="flex gap-x-6">
    <div>
        <x-employer-logo/>
    </div>

    <div class="flex-1 flex flex-col">
        <a href="#" class="self-start text-sm text-gray-400">Laracasts</a>

        <h3 class="font-bold text-xl mt-3 group-hover:text-blue-800 transition-colors duration-300">Video Producer</h3>

        <p class="text-sm text-gray-400 mt-auto">Full Time - From $60,000</p>
    </div>

    <div>
        <x-tag>Tag</x-tag>
        <x-tag>Tag</x-tag>
        <x-tag>Tag</x-tag>
    </div>
</x-panel>>
```
46. Также добавляем в макет обычных карточек `resources/views/components/job-card.blade.php`
```bladehtml
<x-panel class="flex flex-col text-center">
    <div class="self-start text-sm">Laracasts</div>

    <div class="py-8">
        <h3 class="group-hover:text-blue-800 text-xl font-bold transition-colors duration-300">Video Producer</h3>
        <p class="text-sm mt-4">Full Time - From $60,000</p>
    </div>

    <div class="flex justify-between items-center mt-auto">
        <div>
            <x-tag>Tag</x-tag>
            <x-tag>Tag</x-tag>
            <x-tag>Tag</x-tag>
        </div>

        <x-employer-logo :width="42"/>
    </div>
</x-panel>
```
47. В файле шаблона тегов реализуем возможность выбирать размер `resources/views/components/tag.blade.php`:
```bladehtml
@props(['size' => 'base'])

@php
    $classes = "bg-white/10 hover:bg-white/25 rounded-xl font-bold transition-colors duration-300";
    if ($size === 'base') {
        $classes .= " px-5 py-1 text-sm";
    }

    if ($size === 'small') {
        $classes .= " px-3 py-1 text-2xs";
    }
@endphp

<a href="#" class="{{ $classes }}">{{ $slot }}</a>
```
48. Добавим уменьшенные теги в карточки `resources/views/components/job-card.blade.php`:
```bladehtml
<div>
    <x-tag size="small">Backend</x-tag>
    <x-tag size="small">Frontend</x-tag>
    <x-tag size="small">Manager</x-tag>
</div>
```
49. В основной шаблон добавляем новый элемент `resources/views/welcome.blade.php`:
```bladehtml
<x-layout>
    <div class="space-y-10">
        <section class="text-center pt-6">
            <h1 class="font-bold text-4xl">Let's Find Your Next Job</h1>

            <form action="" class="mt-6">
                <input type="text" placeholder="Web Developer..." class="rounded-xl bg-white/5 border-white/10 px-5 py-4 w-full max-w-xl">
            </form>
        </section>

        <section class="pt-10">
```
50. Закончили фронт-энд часть, начинаем делать бэк-энд. В терминале создаем миграцию для таблицы Employers:

`php artisan make:migration create_employers_table`
51. В схему миграции добавляем поля имени, логотипа, и создаем внешний ключ к таблице пользователей:
```php
Schema::create('employers', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\User::class);
            $table->string('name');
            $table->string('logo');
            $table->timestamps();
        });
```
52. `php artisan migrate` проводим миграцию, проверяем создание таблицы в БД.
53. В конфигурационном файле таблицы БД, поменяем имена дефолтных таблиц очередей (jobs) `config/queue.php`:
```php
'database' => [
            'driver' => 'database',
            'connection' => env('DB_QUEUE_CONNECTION'),
            'table' => env('DB_QUEUE_TABLE', 'queued_jobs'),
            'queue' => env('DB_QUEUE', 'default'),
            'retry_after' => (int) env('DB_QUEUE_RETRY_AFTER', 90),
            'after_commit' => false,
        ],
```
```php
'batching' => [
        'database' => env('DB_CONNECTION', 'sqlite'),
        'table' => 'queued_job_batches',
    ],
```
```php
'failed' => [
        'driver' => env('QUEUE_FAILED_DRIVER', 'database-uuids'),
        'database' => env('DB_CONNECTION', 'sqlite'),
        'table' => 'queued_failed_jobs',
    ],
```
54. Находим файл миграций этих дефолтных таблицы `database/migrations/0001_01_01_000002_create_jobs_table.php`, переименовываем его `database/migrations/0001_01_01_000002_create_queued_jobs_table.php` и также меняем имена таблицы:
```php
Schema::create('queued_jobs', function (Blueprint $table) ...
Schema::create('queued_job_batches', function (Blueprint $table) ...
Schema::create('queued_failed_jobs', function (Blueprint $table) ...
```
55. `php artisan migrate:fresh` - обновляем наши миграции, проверяем обновленные таблицы в БД.
56. `php artisan make:model Employer -cfs --policy` - создаем модель Employer с ключами на создание контроллера, фабрики, сеялки БД, политики
57. `php artisan make:model Job --all` - создаем модель Job с ключом --all для всех сущностей, которые предоставляет Laravel
58. Добавляем все необходимые столбцы в файл миграции Job `database/migrations/2025_02_11_083948_create_jobs_table.php`:
```php
Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\Employer::class);
            $table->string('title');
            $table->string('salary');
            $table->string('location');
            $table->string('schedule')->default('Full Time');
            $table->string('url');
            $table->boolean('featured')->default(false);
            $table->timestamps();
        });
```
59. `php artisan migrate` - проводим эту миграцию.
60. В модель Employer добавляем связь (принадлежит) с User `app/Models/Employer.php`:
```php
public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
```
61. В модели User создаем связь (имеет только одного) с Employer `app/Models/User.php`:
```php
public function employer(): HasOne
    {
        return $this->hasOne(Employer::class);
    }
```
62. В модели Job создаем связь (принадлежит) с Employer `app/Models/Job.php`:
```php
public function employer(): BelongsTo
    {
        return $this->belongsTo(Employer::class);
    }
```
63. В модели Employer создаем связь (имеет много) с Job `app/Models/Employer.php`:
```php
public function jobs(): HasMany
    {
        return $this->hasMany(Job::class);
    }
```
64. Заполним фабрику работодателей `database/factories/EmployerFactory.php`:
```php
public function definition(): array
    {
        return [
            'name' => fake()->name,
            'logo' => fake()->imageUrl(),
            'user_id' => User::factory(),
        ];
    }
```
65. Заполним фабрику вакансий `database/factories/JobFactory.php`:
```php
public function definition(): array
    {
        return [
            'employer_id' => Employer::factory(),
            'title' => fake()->jobTitle,
            'salary' => fake()->randomElement(['$50,000 USD', '$90,000 USD', '$150,000 USD']),
            'location' => fake()->randomElement(['Remote', 'Office', 'Outdoor']),
            'schedule' => fake()->randomElement(['Full Time', 'Part Time']),
            'url' => fake()->url,
            'featured' => false
        ];
    }
```
66. Сконфигурируем файл тестовой среды Pest `phpunit.xml`:
```xml
<php>
    <env name="APP_ENV" value="testing"/>
    <env name="APP_MAINTENANCE_DRIVER" value="file"/>
    <env name="BCRYPT_ROUNDS" value="4"/>
    <env name="CACHE_STORE" value="array"/>
    <env name="DB_CONNECTION" value="sqlite"/>
    <env name="DB_DATABASE" value=":memory:"/>
    <env name="MAIL_MAILER" value="array"/>
    <env name="PULSE_ENABLED" value="false"/>
    <env name="QUEUE_CONNECTION" value="sync"/>
    <env name="SESSION_DRIVER" value="array"/>
    <env name="TELESCOPE_ENABLED" value="false"/>
</php>
```
67. `php artisan make:test` - создаем тест, назовем его `JobTest`, выбираем модульное `Unit`.
68. `php artisan test` - проведем проверку тестов, и удалим лишний `tests/Unit/ExampleTest.php`
69. Настраиваем тестовое окружение в файле `tests/Pest.php`:
```php
pest()->extend(Tests\TestCase::class)
  ->use(Illuminate\Foundation\Testing\RefreshDatabase::class)
    ->in('Feature', 'Unit');
```
70. Создаем тест сущности вакансий Job `tests/Unit/JobTest.php`:
```php
it('belongs to an employer', function () {
    // Arrange (Организовать)
    $employer = \App\Models\Employer::factory()->create();

    $job = \App\Models\Job::factory()->create([
        'employer_id' => $employer->id,
    ]);

    // Act (Действовать) и Assert (Утверждать)
    expect($job->employer->is($employer))->toBeTrue();
});
```
71. `php artisan test` - запускаем тест.
72. Создаем тест несуществующей функции `tests/Unit/JobTest.php`:
```php
it('can have tags', function () {
    // AAA
    $job = \App\Models\Job::factory()->create();

    $job->tag('Frontend');

    expect($job->tags)->toHaveCount(1);

});
```
73. Запускаем тест и начинаем реализацию логики.
74. В модели Job `app/Models/Job.php` добавим два метода:
```php
    public function tag()
    {
    }

    public function tags()
    {
        return [];
    }
```
75. `php artisan make:model Tag -fm` - создаем модель Tag
76. В файле миграции тегов добавим столбцы `database/migrations/2025_02_11_111237_create_tags_table.php`:
```php
Schema::create('tags', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->timestamps();
        });
```
77. В фабрике тэгов создаем генерацию данных `database/factories/TagFactory.php`:
```php
public function definition(): array
    {
        return [
            'name' => fake()->unique()->word
        ];
    }
```
78. Добавляем связь многие ко многим в `app/Models/Job.php`:
```php
public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
```
79. `php artisan make:migration create_job_tag_table` - создаем миграцию на сводную таблицу для тэгов
80. Добавляем в миграцию связи на сводные таблицы и ставим каскадное удаление `database/migrations/2025_02_11_112026_create_job_tag_table.php`:
```php
Schema::create('job_tag', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\Job::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(\App\Models\Tag::class)->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
```
81. `php artisan migrate` - проводим эти миграции.
82. Реализуем метод tag() в Job `app/Models/Job.php`:
```php
public function tag(string $name): void
    {
        $tag = Tag::firstOrCreate(['name' => $name]);
        $this->tags()->attach($tag);
    }
```
83. Выключаем защиту на заполнение столбцов в БД `app/Providers/AppServiceProvider.php`:
```php
public function boot(): void
    {
        Model::unguard();
    }
```
84. Запускаем тест `php artisan test`, и он должен пройти. Таким образом мы реализовали принцип TDD, разработка через тестирование.
85. В маршрутизаторе `routes/web.php`, стартовый маршрут делаем на контроллер вакансий:
```php
Route::get('/', [\App\Http\Controllers\JobController::class, 'index']);
```
86. Добавляем метод index() в контроллер вакансий `app/Http/Controllers/JobController.php`:
```php
public function index()
    {
        return view('jobs.index', [
            'jobs' => Job::all(),
            'tags' => Tag::all()
        ]);
    }
```
87. Проведем небольшой рефакторинг, весь код с `resources/views/welcome.blade.php`, перенесем в новый файл `resources/views/jobs/index.blade.php`, и удалим старый
88. В представление добавляем отрисовку тэгов, вместо заглушек `resources/views/jobs/index.blade.php`:
```bladehtml

<section>
    <x-section-heading>Tags</x-section-heading>

    <div class="mt-6 space-x-1">
        @foreach($tags as $tag)
        <x-tag :$tag="$tag"/>
        @endforeach
    </div>
</section>
```
89. Редактируем шаблон тэгов `resources/views/components/tag.blade.php`, чтобы передать в него данные модели:
```bladehtml
@props(['tag', 'size' => 'base'])

@php
    $classes = "bg-white/10 hover:bg-white/25 rounded-xl font-bold transition-colors duration-300";
    if ($size === 'base') {
        $classes .= " px-5 py-1 text-sm";
    }

    if ($size === 'small') {
        $classes .= " px-3 py-1 text-2xs";
    }
@endphp

<a href="/tags/{{ strtolower($tag->name) }}" class="{{ $classes }}">{{ $tag->name }}</a>
```
90. Также редактируем шаблон карточек `resources/views/components/job-card.blade.php`:
```bladehtml
<div>
    @foreach($job->tags as $tag)
    <x-tag :$tag size="small">Backend</x-tag>
    @endforeach
</div>
```
91. Также редактируем шаблон широких карточек `resources/views/components/job-card-wide.blade.php`:
```bladehtml
<div>
    @foreach($job->tags as $tag)
    <x-tag :$tag>Backend</x-tag>
    @endforeach
</div>
```
92. В начало файлов обоих шаблонов карточек `resources/views/components/job-card-wide.blade.php` и `resources/views/components/job-card.blade.php` нужно добавить свойство `@props(['job'])`, чтобы шаблон получил к ним доступ. 
93. В `resources/views/jobs/index.blade.php`, также добавим отрисовку данных с БД:
```bladehtml
<section class="pt-10">
    <x-section-heading>Featured Jobs</x-section-heading>

    <div class="grid lg:grid-cols-3 gap-8 mt-6">
        @foreach($jobs as $job)
        <x-job-card :$job/>
        @endforeach
    </div>
</section>
```
```bladehtml
<section>
    <x-section-heading>Recent Jobs</x-section-heading>

    <div class="mt-6 space-y-6">
        @foreach($jobs as $job)
        <x-job-card-wide :$job/>
        @endforeach
    </div>
</section>
```
94. В сеятеле вакансий `database/seeders/JobSeeder.php`, добавим данные:
```php
public function run(): void
    {
        $tags = Tag::factory(3)->create();
        Job::factory(20)->hasAttached($tags)->create();
    }
```
95. В основном сеятеле `database/seeders/DatabaseSeeder.php`, добавим вызов сеятеля вакансий:
```php
public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        
        $this->call(JobSeeder::class);
    }
```
96. `php artisan db:seed` - запускаем сеятель, проверяем результат в БД.
97. Заменим статичные элементы на динамические с БД в `resources/views/components/job-card.blade.php`:
```bladehtml
@props(['job'])

<x-panel class="flex flex-col text-center">
    <div class="self-start text-sm">{{ $job->employer->name }}</div>

    <div class="py-8">
        <h3 class="group-hover:text-blue-800 text-xl font-bold transition-colors duration-300">{{ $job->title }}</h3>
        <p class="text-sm mt-4">{{ $job->salary }}</p>
    </div>

    <div class="flex justify-between items-center mt-auto">
        <div>
            @foreach($job->tags as $tag)
                <x-tag :$tag size="small" />
            @endforeach
        </div>

        <x-employer-logo :width="42"/>
    </div>
</x-panel>
```
98. Шаблон широких карточек также обновим `resources/views/components/job-card-wide.blade.php`:
```bladehtml
@props(['job'])

<x-panel class="flex gap-x-6">
    <div>
        <x-employer-logo/>
    </div>

    <div class="flex-1 flex flex-col">
        <a href="#" class="self-start text-sm text-gray-400">{{ $job->employer->name }}</a>

        <h3 class="font-bold text-xl mt-3 group-hover:text-blue-800 transition-colors duration-300">{{ $job->title }}</h3>

        <p class="text-sm text-gray-400 mt-auto">{{ $job->salary }}</p>
    </div>

    <div>
        @foreach($job->tags as $tag)
            <x-tag :$tag />
        @endforeach
    </div>
</x-panel>
```
99. В сеятель вакансий `database/seeders/JobSeeder.php`, добавим вариативность для двух итераций:
```php
public function run(): void
    {
        $tags = Tag::factory(3)->create();
        Job::factory(20)->hasAttached($tags)->create(new Sequence([
            'featured' => false,
            'schedule' => 'Full Time'
        ], [
            'featured' => true,
            'schedule' => 'Part Time'
        ]));
    }
```
100. `php artisan migrate:fresh --seed` - обновим миграции
101. Обновим логику для контроллера `app/Http/Controllers/JobController.php`:
```php
public function index()
    {
        $jobs = Job::latest()->with(['employer', 'tags'])->get()->groupBy('featured');

        return view('jobs.index', [
            'jobs' => $jobs[0],
            'featuredJobs' => $jobs[1],
            'tags' => Tag::all(),
        ]);
    }
```
102. Обновим отображение вакансий с фичей `resources/views/jobs/index.blade.php`:
```bladehtml
@foreach($featuredJobs as $job)
<x-job-card :$job/>
@endforeach
```
103. В маршрутизаторе создаем необходимые маршруты `routes/web.php`:
```php
Route::get('/register', [RegisteredUserController::class, 'create']);
Route::post('/register', [RegisteredUserController::class, 'store']);
Route::get('/login', [SessionController::class, 'create']);
Route::post('/login', [SessionController::class, 'store']);
Route::delete('/logout', [SessionController::class, 'destroy']);
```
104. `php artisan make:controller SessionController --resource` - создаем контроллер SessionController
105. `php artisan make:controller RegisteredUserController --resource` - создаем контроллер RegisteredUserController
106. Импортируем их в роутере `routes/web.php`.
107. В контроллере RegisteredUserController `app/Http/Controllers/RegisteredUserController.php`, создаем метод create():
```php
public function create()
    {
        return view('auth.register');
    }
```
108. Создаем представление для него `resources/views/auth/register.blade.php`:
```bladehtml
<x-layout>
    <x-page-heading>Register</x-page-heading>
</x-layout>
```
109. Начинаем создавать необходимые компоненты и добавлять в макет: макет заголовка `resources/views/components/page-heading.blade.php`:
```bladehtml
<h1 class="font-bold text-center text-4xl mb-8">{{ $slot }}</h1>
```
110. Создадим макет кнопки `resources/views/components/forms/button.blade.php`:
```bladehtml
<button {{ $attributes(['class' => 'bg-blue-800 rounded py-2 px-6 dont-bold']) }}>{{ $slot }}</button>
```
111. Создадим макет формы `resources/views/components/forms/form.blade.php`:
```bladehtml
<form {{ $attributes(["class" => "max-w-2xl mx-auto space-y-6", "method" => "GET"]) }}>
    @if ($attributes->get('method', 'GET') !== 'GET')
        @csrf
        @method($attributes->get('method'))
    @endif

    {{ $slot }}
</form>
```
112. Создаем макет полей ввода `resources/views/components/forms/input.blade.php`:
```bladehtml
@props(['label', 'name'])

@php
    $defaults = [
        'type' => 'text',
        'id' => $name,
        'name' => $name,
        'class' => 'rounded-xl bg-white/10 border border-white/10 px-5 py-4 w-full',
        'value' => old($name)
];
@endphp

<x-forms.field :$label :$name>
    <input {{ $attributes($defaults) }}>
</x-forms.field>
```
113. Создадим макет для лэйбла и филда `resources/views/components/forms/field.blade.php`:
```bladehtml
@props(['label', 'name'])

<div>
    @if($label)
        <x-forms.label :$name :$label />
    @endif

    <div class="mt-1">
        {{ $slot }}

        <x-forms.error :error="$errors->first($name)" />
    </div>
</div>
```
114. Добавим отступ в тело основного макета `resources/views/components/layout.blade.php`:
```bladehtml
<body class="bg-black text-white font-hanken-grotesk pb-10">
```
115. Создадим макет для Лэйблов `resources/views/components/forms/label.blade.php`:
```bladehtml
@props(['name', 'label'])

<div class="inline-flex items-center gap-x-2">
    <span class="w-2 h-2 bg-white inline-block"></span>
    <label class="font-bold" for="{{ $name }}">{{ $label }}</label>
</div>
```
116. Создадим макет для поля отображения ошибок `resources/views/components/forms/error.blade.php`:
```bladehtml
@props(['error' => false])

@if ($error)
    <p class="text-sm text-red-500 mt-1">{{ $error }}</p>
@endif
```
117. Создадим макет для разделительной линии `resources/views/components/forms/divider.blade.php`:
```bladehtml
<div>
    <div class="bg-white/10 my-10 h-px w-full"></div>
</div>
```
118. Оформим макет страницы регистрации `resources/views/auth/register.blade.php`:
```bladehtml
<x-layout>
    <x-page-heading>Register</x-page-heading>

    <x-forms.form method="POST" action="/register" enctype="multipart/form-data">
        <x-forms.input label="Name" name="name" />
        <x-forms.input label="Email" name="email" type="email"/>
        <x-forms.input label="Password" name="password" type="password"/>
        <x-forms.input label="Password Confirmation" name="password_confirmation" type="password"/>

        <x-forms.divider />

        <x-forms.input label="Employer Name" name="employer" />
        <x-forms.input label="Employer Logo" name="logo" type="file" />

        <x-forms.button>Create Account</x-forms.button>
    </x-forms.form>
</x-layout>
```
119. В файле зависимостей `.env`, изменим параметр хранения файлов для логотипов на публичный:
```php
FILESYSTEM_DISK=public
```
120. В контроллере регистрации реализуем метод store() `app/Http/Controllers/RegisteredUserController.php`:
```php
public function store(Request $request)
    {
        $userAttributes = $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', 'confirmed', Password::min(6)],
        ]);

        $employerAttributes = $request->validate([
            'employer' => ['required'],
            'logo' => ['required', File::types(['png', 'jpg', 'webp'])],
        ]);

        $user = User::create($userAttributes);

        $logoPath = $request->logo->store('logos');

        $user->employer()->create([
            'name' => $employerAttributes['employer'],
            'logo' => $logoPath
        ]);

        Auth::login($user);

        return redirect('/');
    }
```
121. В контроллере сессий реализуем метод create() `app/Http/Controllers/SessionController.php`:
```php
public function create()
    {
        return view('auth.login');
    }
```
122. Создадим представление страницы логина `resources/views/auth/login.blade.php`:
```bladehtml
<x-layout>
    <x-page-heading>Log In</x-page-heading>

    <x-forms.form method="POST" action="/login">
        <x-forms.input label="Email" name="email" type="email"/>
        <x-forms.input label="Password" name="password" type="password"/>

        <x-forms.button>Log In</x-forms.button>
    </x-forms.form>
</x-layout>
```
123. В контроллере сессий реализуем методы store() и destroy() `app/Http/Controllers/SessionController.php`:
```php
public function store()
    {
        $attributes = request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (! \Auth::attempt($attributes)) {
            throw ValidationException::withMessages([
                'email' => 'Sorry, those credentials do not match.',
            ]);
        }

            request()->session()->regenerate();

            return redirect('/');
    }
```
```php
public function destroy(string $id)
    {
        \Auth::logout();

        return redirect('/');
    }
```
124. Добавляем в роутер промежуточное ПО для работы логики гостевого входа `routes/web.php`:
```php
Route::get('/', [\App\Http\Controllers\JobController::class, 'index']);

Route::middleware('guest')->group(function () {
    Route::get('/register', [RegisteredUserController::class, 'create']);
    Route::post('/register', [RegisteredUserController::class, 'store']);
    Route::get('/login', [SessionController::class, 'create']);
    Route::post('/login', [SessionController::class, 'store']);
});

Route::delete('/logout', [SessionController::class, 'destroy'])->middleware('auth');
```
125. В макете основном реализуем логику отображения кнопки добавления вакансий при авторизации `resources/views/components/layout.blade.php`:
```bladehtml
@auth
<div>
    <a href="/jobs/create">Post a Job</a>
</div>
@endauth

@guest
<div class="space-x-6 font-bold">
    <a href="/register">Sign Up</a>
    <a href="/login">Log In</a>
</div>
@endguest
```
126. В макете отображения списка вакансий изменим отображение формы поиска `resources/views/jobs/index.blade.php`:
```bladehtml
<x-forms.form action="/search" class="mt-6">
    <x-forms.input :label="false" name="q" placeholder="Web Developer..."/>
</x-forms.form>
```
127. `php artisan make:controller SearchController` - создадим контроллер поиска в терминале.
128. В маршрутизаторе добавим для него маршрут `routes/web.php`:
```php
Route::get('/search', SearchController::class);
```
129. В контроллере реализуем магический метод __invoke() `app/Http/Controllers/SearchController.php`:
```php
public function __invoke()
    {
        $jobs = Job::query()
            ->with(['employer', 'tags'])
            ->where('title', 'LIKE', '%' . \request('q') . '%')
            ->get();

        return view('results', ['jobs' => $jobs]);
    }
```
130. Реализуем представление для результатов поиска `resources/views/results.blade.php`:
```bladehtml
<x-layout>
    <x-page-heading>Results</x-page-heading>

    <div class="space-y-6">
        @foreach($jobs as $job)
            <x-job-card-wide :$job />
        @endforeach
    </div>
</x-layout>
```
131. `php artisan make:controller TagController` - создаем в терминале контроллер для тегов.
132. Добавляем маршрут в `routes/web.php`:
```php
Route::get('/tags/{tag:name}', TagController::class);
```
133. В модели тэгов сделаем связь с моделью вакансий `app/Models/Tag.php`:
```php
public function jobs(): BelongsToMany
    {
        return $this->belongsToMany(Job::class);
    }
```
134. В контроллер тэгов `app/Http/Controllers/TagController.php` реализуем метод __invoke():
```php
public function __invoke(Tag $tag)
    {
        return view('results', ['jobs' => $tag->jobs]);
    }
```
135. Создадим маршруты для кнопки публикации вакансий `routes/web.php`:
```php
Route::get('/jobs/create', [\App\Http\Controllers\JobController::class, 'create'])->middleware('auth');
Route::post('/jobs', [\App\Http\Controllers\JobController::class, 'store'])->middleware('auth');
```
136. В контроллере вакансий реализуем метод create() `app/Http/Controllers/JobController.php`:
```php
public function create()
    {
        return view('jobs.create');
    }
```
137. Создадим шаблон для выпадающего списка `resources/views/components/forms/select.blade.php`:
```bladehtml
@props(['label', 'name'])

@php
    $defaults = [
        'id' => $name,
        'name' => $name,
        'class' => 'rounded-xl bg-white/10 border border-white/10 px-5 py-5 w-full'
];
@endphp

<x-forms.field :$label :$name>
    <select {{ $attributes($defaults) }}>
        {{ $slot }}
    </select>
</x-forms.field>
```
138. Создадим шаблон для чебокса `resources/views/components/forms/checkbox.blade.php`:
```bladehtml
@props(['label', 'name'])

@php
    $defaults = [
        'type' => 'checkbox',
        'id' => $name,
        'name' => $name,
        'value' => old($name)
];
@endphp

<x-forms.field :$label :$name>
    <div class="rounded-xl bg-white/10 border border-white/10 px-5 py-4 w-full">
        <input {{ $attributes($defaults) }}>
        <span class="pl-1">{{ $label }}</span>
    </div>
</x-forms.field>
```
139. Реализуем представление добавления вакансии `resources/views/jobs/create.blade.php`:
```bladehtml
<x-layout>
    <x-page-heading>New Job</x-page-heading>

    <x-forms.form method="POST" action="/jobs">
        <x-forms.input label="Title" name="title" placeholder="CEO"/>
        <x-forms.input label="Salary" name="salary" placeholder="$90,000 USD"/>
        <x-forms.input label="Location" name="location" placeholder="Winter Park, Florida"/>

        <x-forms.select label="Schedule" name="schedule">
            <option>Part Time</option>
            <option>Full Time</option>
        </x-forms.select>

        <x-forms.input label="URL" name="url" placeholder="https://acme.com/jobs/ceo-wanted"/>
        <x-forms.checkbox label="Feature (Costs Extra)" name="featured" />

        <x-forms.divider />

        <x-forms.input label="Tags (comma separated)" name="tags" placeholder="laracasts, video, education"/>

        <x-forms.button>Publish</x-forms.button>
    </x-forms.form>
</x-layout>
```
140. Реализуем метод store() в контроллере вакансий `app/Http/Controllers/JobController.php`:
```php
public function store(Request $request)
    {
        $attributes = $request->validate([
            'title' => ['required'],
            'salary' => ['required'],
            'location' => ['required'],
            'schedule' => ['required', Rule::in(['Part Time', 'Full Time'])],
            'url' => ['required', 'active_url'],
            'tags' => ['nullable'],
        ]);

        $attributes['featured'] = $request->has('featured');

        $job = Auth::user()->employer->jobs()->create(\Arr::except($attributes, 'tags'));

        if ($attributes['tags'] ?? false) {
            foreach (explode(',', $attributes['tags']) as $tag) {
                $job->tag($tag);
            }
        }

        return redirect('/');
    }
```
141. В шаблонах карточек Title карточки сделаем ссылкой `resources/views/components/job-card.blade.php` и `resources/views/components/job-card-wide.blade.php`:
```bladehtml
<a href="{{ $job->url }}" target="_blank">
    {{ $job->title }}
</a>
```
142. В карточке работодателя уберем заглушки для лого, и добавим реальные `resources/views/components/employer-logo.blade.php`:
```bladehtml
@props(['employer','width' => 90])

<img src="{{ asset($employer->logo) }}" alt="" class="rounded-xl" width="{{ $width }}>
```
143. Добавим в карточки `resources/views/components/job-card-wide.blade.php`:
```bladehtml
<x-employer-logo :employer="$job->employer" />
```
144. В карточку `resources/views/components/job-card.blade.php`:
```bladehtml
<x-employer-logo :employer="$job->employer" :width="42"/>
```
145. `php artisan storage:link` - создает символическую ссылку (symlink) между публичной директорией public/storage и директорией storage/app/public. Это позволяет сделать файлы, хранящиеся в storage/app/public, доступными через веб-интерфейс
146. В основном макете `resources/views/components/layout.blade.php`, добавим кнопку выхода Log Out:
```bladehtml
@auth
<div class="space-x-6 font-bold flex">
    <a href="/jobs/create">Post a Job</a>

    <form method="POST" action="/logout">
        @csrf
        @method('DELETE')

        <button>Log Out</button>
    </form>
</div>
@endauth
```
147. На этом заканчиваем курс.
