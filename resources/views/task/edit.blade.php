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
                        @include('task._form')
                        {{-- @include('task._form',[
                            'submit'=> 'Update'
                        ]) --}}
                    </form>
                </ul>
            </div>
        </div>
    </div>
</x-app-layout>