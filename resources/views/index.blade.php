@extends('layouts.app')

@section('content')
    <h1>ToDo List</h1>

    <ul>
        @foreach($todos as $todo)
            <li>
            <a href="{{ route('todo.show', $todo->id) }}">
    {{ $todo->title }}
</a>
            </li>
        @endforeach
    </ul>
@endsection
