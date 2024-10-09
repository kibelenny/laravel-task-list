<?php

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/tasks', function () {
    return view('index', [
        'tasks' => Task::latest()->get()
    ]);
})->name('tasks.index');

Route::view('/tasks/create', 'create') -> name('tasks.create');

Route::get('/tasks/{id}', function ($id){
    return view('show', ['task' => Task::findOrFail($id)]);
})->name('tasks.show');

Route::post('/tasks', function (Request $request) {
    $data = $request->validate([
        'title' => 'required|min:2',
        'description' => 'required|min:2',
        'long_description' => '',
    ]);

    $task = new Task();
    $task->title = $data['title'];
    $task->description = $data['description'];
    $task->long_description = $data['long_description'];
    $task->save();

    return redirect()->route('tasks.show', ['id' => $task->id])->with('success', 'Task created!');
})->name('tasks.store');
