@extends('layouts.app')

@section('title', 'lista de tareas')

@section('content')

  <h1>Lista de Tareas</h1>

  <a href="{{ route('tasks.create') }}" class="btn btn-primary">Nueva tarea</a>

  <div style="margin-top: 20px;">
    @if ($tasks->count() > 0)
      @foreach ($tasks as $task)
        <div
          style="border: 1px solid #ddd; padding: 15px; margin-bottom: 10px; border-radius: 5px; background: {{ $task->completed ? '#f0f0f0' : 'white' }}">
          <h3 style="margin-bottom: 10px; {{ $task->completed ? 'text-decoration: line-through; color: #999;' : '' }}">
            {{ $task->title }}
          </h3>

          @if ($task->description)
            <p style="color: #666; margin-bottom: 10px;">{{ $task->description }}</p>
          @endif
          <div style="margin-top: 10px">
            <a href="{{ route('tasks.show', $task) }}" class="btn btn-primary"
              style="font-size: 12px; padding: 5px 10px;">Ver</a>
            <a href="{{ route('tasks.edit', $task) }}" class="btn btn-success"
              style="font-size: 12px; padding: 5px 10px;">Editar</a>

            <form action="{{ route('tasks.destroy', $task) }}" method="POST" style="display: inline;">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger" style="font-size: 12px; padding: 5px 10px;"
                onclick="return confirm('¿Estás seguro?')">Eliminar</button>
            </form>
          </div>
        </div>
      @endforeach
    @else
      <p style="margin-top: 20px; color: #666;">No hay tareas. Crea tu primera tarea!</p>
    @endif
  </div>
@endsection
