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
            <li>
                <div>{{ $index+1 }} - {{ $task->list }} -
                        <a style="color: rgb(32, 173, 255)" href="/tasks/{{ $task->id }}/edit">Edit</a> |
                        <form action="/tasks/{{ $task->id }}" method="POST" style="display: inline">
                            @csrf
                            @method("delete")
                            <button type="submit">Delete</button>
                    </form>
                </div>

            </li>
        @endforeach

    </ul>
</x-app-layout>