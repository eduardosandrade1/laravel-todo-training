<form action="{{route('todo.update', ['id' => $todo->id])}}" method="post">
    @csrf
    <input type="text" name="name" value="{{ old('name', $todo->name) }}">
    @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <button type="submit">Submit</button>
</form>
