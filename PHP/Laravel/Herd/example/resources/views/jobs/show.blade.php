<x-layout>
    <x-slot:heading>
        Job
    </x-slot:heading>

    <h2 class="font-bold text-lg">{{ $job->title }}</h2>
    <p>
        This job pays {{ $job->salary }} per year.
    </p>

    {{--если пользователь авторизован, то отобразим кнопку через политику--}}
    @can('edit', $job)
    {{--@can('edit-job', $job) альтернативно через шлюз edit-job--}}
    <p class="mt-6">
        <x-button href="/jobs/{{ $job->id }}/edit">Edit Job</x-button>
    </p>
    @endcan
</x-layout>
