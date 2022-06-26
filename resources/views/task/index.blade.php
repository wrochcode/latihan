<x-app-layout :title=" $name ?? 'Task'">
    {{-- @foreach ($tasks as $index => $task) --}}
    {{-- <li style="margin-bottom: 20px"><a href="/tasks/create">Add task</a></li> --}}
    
    <div class="container">
        <h1  style="margin-bottom: 5px">Tasks page</h1>
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Create New Task</div>
                    <div class="card-body">
                        {{-- <form action="/tasks" class="d-flex" style="margin-bottom: 20px" method="post"> --}}
                        <form action="{{ route('tasks.create') }}" class="d-flex" style="margin-bottom: 20px" method="post">
                            @csrf
                            <input class="form-control me-2" type="text" name="list" placeholder="The name of task">
                            <button class="btn btn-primary" type="submit">Add</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <ul class="list-group mt-5">
            @foreach ($tasks as $index => $task)
                <li class="list-group-item d-flex align-items-center justify-content-between">
                    {{ $index+1 }} - {{ $task->list }}
                    <div class="d-flex ">
                        {{-- @if ($task->mark == 0)
                            Unfinish
                        @else
                            Finished
                        @endif --}}
                        <a class="btn btn-primary me-2"href="{{ route('tasks.edit',$task->id) }}">Edit</a>
                        <form action="{{ route('tasks.destroy',$task->id) }}" method="POST">
                            @csrf
                            @method("delete")
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
    
                </li>
            @endforeach
    
        </ul>
    </div>


</x-app-layout>