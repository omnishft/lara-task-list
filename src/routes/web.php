<?php

use Illuminate\Support\Facades\Route;

class Task
{
    public function __construct(

       public int $id,
       public string $title,
       public string $description,
       public ?string $long_description,
       public bool $completed,
       public string $created_at,
       public string $updated_at,
    )
    {
    }
}

$task = [
    new Task(
        1,
        "Finish blade directives",
        "Complete task list",
        "Complete laravel course",
        false,
        "06:00 26-05-2025",
        "No updates",
    ),
    new Task(
        2,
        "Finish blade directives",
        "Complete task list",
        "Complete laravel course",
        false,
        "06:00 26-05-2025",
        "No updates",
    ),
    new Task(
        3,
        "Finish blade directives",
        "Complete task list",
        "Complete laravel course",
        false,
        "06:00 26-05-2025",
        "No updates",
    ),
    new Task(
        4,
        "Finish blade directives",
        "Complete task list",
        "Complete laravel course",
        false,
        "06:00 26-05-2025",
        "No updates",
    ),
];


Route::get('/laravel', function () {
    return view('welcome');
})->name('laravel');

# string response
#Route::get('/', function () {
#    return 'home';
#})->name('home');

# URL parameters
#Route::get('/hello/{name}', function ($name) {
#    return 'hello ' . $name;
#});

# URL parameters
#Route::get('/hey', function () {
#    return 'Hey!';
#});

#Route::get('/hey', function () {
#    return redirect('/hello');
#});

# named function
#Route::get('/named_function', function () {
#    return redirect()->route('named');
#});

# Fallback
#Route::fallback( function () {
#    return "Fallback";
#});

#-----------------------------------------------------------------------#

Route::get('/', function () use($task) {
    return view('index', [
        'application_name' => 'Task Manager',
        'tasks' => $task
    ]);
})->name('tasks.index');

Route::get('/{id}', function ($id) {
   return view('$id');
})->name('tasks.show');
