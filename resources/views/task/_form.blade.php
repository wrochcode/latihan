<div class="mb-2">
    {{-- {{ $task->id }} --}}
    {{-- <input style="margin-left: 7px inline" class="form-control @error('list') is-invalid @enderror" type="text" name="list" value="{{ $task->list }}" placeholder="{{ $task->list }}"> --}}
    {{-- <input style="margin-left: 7px inline" class="form-control @error('list') is-invalid @enderror" type="text" name="list" value="{{ old('list') ?? $task->list }}" placeholder="{{ $task->list }}"> --}}
    <input style="margin-left: 7px inline" class="form-control @error('list') is-invalid @enderror" type="text" name="list" value="{{ old('list', $task->list) }}" placeholder="{{ $task->list }}">
    @error('list')
        <div class="span invalid-feedback">{{ $message }}</div>
    @enderror
</div>
<a href="{{  route('tasks.index') }}" class="btn btn-danger" >Cancel</a>
<button class="btn btn-primary" type="submit">{{ $submit }}</button>
{{-- <button class="btn btn-primary" type="submit">Update</button> --}}