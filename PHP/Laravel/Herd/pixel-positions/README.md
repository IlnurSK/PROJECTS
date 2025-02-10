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
