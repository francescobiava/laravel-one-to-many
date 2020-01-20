@extends('layouts.base')

@section('content')
  
  <h1>Tasks: {{ $tasks->count() }}</h1>
  <ul>
    @foreach ($tasks as $task)
      <li>
        {{ $task->id }}: {{ $task->name }}
        <br>{{ $task->description }}
        <br>Assigned to: {{ $task->employee->name }} {{ $task->employee->lastname}}
      </li>
      <br>
    @endforeach
  </ul>

@endsection