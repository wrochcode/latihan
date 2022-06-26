<x-app-layout :title=" $name ?? 'Task'">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1  style="margin-bottom: 5px">Tasks Edit page</h1>
                <ul style="display: flex;
                list-style-type: none;">
                    <li >Id</li>
                    <li style="margin-left: 7px" >Value</li>
                </ul>
                <ul>
                    {{-- <form action="/tasks/{{ $task->id }}" style="margin-bottom: 20px" method="post"> --}}
                    <form action="{{ route('tasks.update', $task->id) }}" style="margin-bottom: 20px" method="post">
                        @method('put')
                        @csrf
                        <div class="mb-2">
                            {{ $task->id }}
                            <input style="margin-left: 7px inline" class="form-control" type="text" name="list" value="{{ $task->list }}" placeholder="{{ $task->list }}">
                        </div>
                        <a href="{{  route('tasks.index') }}" class="btn btn-danger" >Cancel</a>
                        <button class="btn btn-primary" type="submit">Update</button>
                    </form>
                </ul>
            </div>
        </div>
    </div>
</x-app-layout>