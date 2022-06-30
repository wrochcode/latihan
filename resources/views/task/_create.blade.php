{{-- {{ print_r($errors->all()) }} --}}
<div class="card">
    {{-- @foreach ($errors->all() as $error)
        <div class="alert alert-danger">
            {{ $error }}
        </div>
        @endforeach --}}
        <div class="card-header">Create New Task</div>
        <div class="card-body">
            {{-- ================================================================================================================ --}}
            {{-- @if ($errors->all())
                <div class="alert alert-danger">
                    Your data was invalid
                </div>
                @endif --}}
            {{-- ================================================================================================================ --}}
        {{-- <form action="/tasks" class="d-flex" style="margin-bottom: 20px" method="post"> --}}
        {{-- <form action="{{ route('tasks.store') }}" class="d-flex" style="margin-bottom: 20px" method="post"> --}}
        <form action="{{ route('tasks.store') }}" style="margin-bottom: 20px" method="post">
            @csrf
            @include('task._form')
            {{-- @include('task._form',[
                'submit'=> 'Create'
            ]) --}}
            {{-- <div class="mb-2">
                <input class="form-control me-2 @error('list') is-invalid @enderror" type="text" name="list" placeholder="The name of task">
                @error('list')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <button class="btn btn-primary" type="submit">Add</button> --}}
        </form>
    </div>
</div>