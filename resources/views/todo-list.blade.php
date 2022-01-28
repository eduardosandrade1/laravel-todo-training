@foreach ($todos as $todo)
    <p>{{ $todo->name }} <a href="{{ route('todo.delete', ['id' => $todo->id]) }}">Remover</a></p>
@endforeach


<form action="{{route('todo.store')}}" method="post">
    @csrf
    <input type="text" name="name">
    @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <button type="submit">Submit</button>
</form>
