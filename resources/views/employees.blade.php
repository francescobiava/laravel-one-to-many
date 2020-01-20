@extends('layouts.base')

@section('content')

  <h1>Employees: {{ $employees->count() }}</h1>
  <h3>With tasks:</h3>
  <ul>
    @foreach ($employees as $employee)
      @if ($employee->tasks->count() > 0)
        <li>
          {{ $employee->name }} {{ $employee->lastname }}: {{ $employee->tasks->count() }}
          <ul>
            @foreach ($employee->tasks as $task)
              <li>{{ $task->id }}: {{ $task->name }}</li>
            @endforeach
          </ul>
        </li>
        <br>
      @endif  
    @endforeach
  </ul>
  <h3>Without tasks:</h3>
  @foreach ($employees as $employee)
    <ul>
      @if ($employee->tasks->count() == 0)
        <li>{{ $employee->name }} {{ $employee->lastname }}: {{ $employee->tasks->count() }}</li>
      @endif
    </ul>
  @endforeach

@endsection