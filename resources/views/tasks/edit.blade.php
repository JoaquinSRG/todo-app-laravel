@extends('layouts.app')

@section('title', 'Editar tarea')

@section('content')
  <h1>Editar Tarea</h1>

  <form action="{{ route('tasks.update', $task) }}" method="post">
    @csrf
    @method('PUT')
    <div class="from-group">
      <label for="title">Titulo *</label>
      <input type="text" name="title" id="title" value="{{ old('title', $task->title) }}" required>
      @error('title')
        <span style="color: red; font-size: 12px;">{{ $message }}</span>
      @enderror
    </div>
    <div class="form-group">
      <label>
        <input type="checkbox" name="completed" {{ $task->completed ? 'checked' : '' }}>
        Marcar como completada
      </label>
    </div>
    <div style="margin-top: 20px;">
      <button type="submit" class="btn btn-success">Actualizar tareas</button>
      <a href="{{ route('tasks.index') }}" class="btn btn-secondary">Cancelar</a>
    </div>
  </form>
@endsection
