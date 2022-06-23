<x-app-layout :title=" $name ?? 'Task'">
    <h1  style="margin-bottom: 5px">Tasks page</h1>
    {{-- @foreach ($tasks as $index => $task) --}}
    {{-- <li style="margin-bottom: 20px"><a href="/tasks/create">Add task</a></li> --}}
    <form action="/tasks" style="margin-bottom: 20px" method="post">
        @csrf
        <input type="text" name="list" placeholder="The name of task">
        <button type="submit">Add</button>
    </form>
    <ul style="list-style-type: none">
        @foreach ($tasks as $index => $task)
            <li>{{ $index+1 }} - {{ $task->list }}</li>
        @endforeach

    </ul>
</x-app-layout>