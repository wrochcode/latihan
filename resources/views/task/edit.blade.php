<x-app-layout :title=" $name ?? 'Task'">
    <h1  style="margin-bottom: 5px">Tasks Edit page</h1>
    <ul style="display: flex;
    list-style-type: none;">
        <li >Id</li>
        <li style="margin-left: 7px" >Value</li>
    </ul>
    <ul>
        <form action="/tasks/{{ $task->id }}" style="margin-bottom: 20px" method="post">
            @method('put')
            @csrf
            {{ $task->id }}
            <input style="margin-left: 7px" type="text" name="list" value="{{ $task->list }}" placeholder="{{ $task->list }}">
            <button type="submit">Update</button>
        </form>
    </ul>
</x-app-layout>