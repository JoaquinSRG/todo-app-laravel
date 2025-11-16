@extends('layouts.app')

@section('title', 'Ver tarea')

@section('content')
  <h1>Detalles de la tarea</h1>
  <div
    style="border: 1px solid #ddd; padding: 20px; margin-top: 20px; border-radius: 5px; background: {{ $task->completed ? '#f0f0f0' : 'white' }}">
    <h2 style="{{ $task->title ? 'text-decoration: line-through; color: #999,' : '' }}">{{ $task->title }}</h2>
    <div style="margin-top: 15px">
      <strong>Estado:</strong>
      @if ($task->completed)
        <span style="color: green">Completada</span>
      @else
        <span style="color: orange">Pendiente</span>
      @endif
    </div>

    @if ($task->description)
      <div style="margin-top: 15px;">
        <strong>Descripcion:</strong>
        <p style="margin-top: 5px; color: #666;">{{ $task->description }}</p>
      </div>
    @endif

    <div style="margin-top: 15px;">
      <strong>Creada:</strong> {{ $task->created_at->format('d/m/Y H:i') }}
    </div>

    <div style="margin-top: 15px;">
      <strong>Ultima actualizacion:</strong> {{ $task->updated_at->format('d/m/Y H:i') }}
    </div>
  </div>

  <div style="margin-top: 20px">
    <a href="{{ route('tasks.edit', $task) }}" class="btn btn-success">Editar</a>
    <a href="{{ route('tasks.index') }}" class="btn btn-secondary">Volver</a>

    <form action="{{ route('tasks.destroy', $task) }}" method="post" style="display: inline">
      @csrf
      @method('DELETE')
      <button type="submit" class="btn btn-danger"
        onclick="return fonrim('Estas seguro de eliminar esta tarea?')">Eliminar</button>
    </form>
  </div>
