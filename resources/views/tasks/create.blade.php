@extends('layouts.app')

@section('title', 'Nueva tarea')

@section('content')
  <h1>Crear nueva tarea</h1>

  <form action="{{ route('tasks.store') }}" method="post">
    @csrf
    <div class="from-group">
      <label for="title">Titulo *</label>
      <input type="text" name="title" id="title" value="{{ old('title') }}" required>
      @error('title')
        <span style="color: red; font-size: 12px;">{{ $message }}</span>
      @enderror
    </div>
    <div class="form-group">
      <label for="description">Descripcion</label>
      <textarea name="description" id="description">{{ old('description') }}</textarea>
      @error('description')
        <span style="color: red; font-size: 12px;">{{ message }}</span>
      @enderror
    </div>

    <div style="margin-top: 20px;">
      <button type="submit" class="btn btn-success">Guardar tarea</button>
      <a href="{{ route('tasks.index') }}" class="btn btn-secondary">Cancelar</a>
    </div>
  </form>
