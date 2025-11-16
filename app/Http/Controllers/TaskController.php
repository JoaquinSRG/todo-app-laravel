<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $tasks = Task::orderBy('created_at', 'desc')->get();
      return view('tasks.index', compact('tasks'));
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
      return view('tasks.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      $request->validate([
        'title' => 'required|max:255',
        'description' => 'nullable'
      ]);

      Task::create([
        'title' => $request->title,
        'description' => $request->description,
        'completed' => false
      ]);
      
      return redirect()->route('tasks.index')
      ->with('success', 'Tarea creada exitosamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(task $task)
    {
      return view('tasks.show', compact('task'));
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(task $task)
    {
      return view('tasks.edit', compact('task'));
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Task $task)
    {
      $request->validate([
        'title' => 'required|max:255',
        'description' => 'nullable'
      ]);

      $task->update([
        'title' => $request->title,
        'description' => $request->description ?: null,
        'completed' => $request->has('completed')
      ]);

      return redirect()->route('tasks.index')
      ->with('success', 'Tarea actualizada exitosamente');
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(task $task)
    {
        $task->delete();

        return redirect()->route('tasks.index')
        ->with('success', 'Tarea eliminada exitosamente');
        //
    }
}
