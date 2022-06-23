<x-app-layout :title=" $name ?? 'Task'">
    Tasks page
    {{-- @foreach ($tasks as $index => $task) --}}
    <ul>
        @foreach ($tasks as $task)
            <li>{{ $task->list }}</li>
        @endforeach

    </ul>
</x-app-layout>