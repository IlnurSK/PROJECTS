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
