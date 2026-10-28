<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $todo_list = Todo::with('tags')
            ->with('likedBy')
            ->get();

        // "Dump and Die" prints the data and stops executing. Useful
        // for debugging and looking at intermediate values.
        // dd($todo_list);
        return view('todoIndex')->with('todos', $todo_list);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Todo::where('id', $id)->get();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Display the form
        return view('todoCreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate input
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description'    => 'required|string|max:2000',
            'due_date' => 'date',
            'completed'    => 'required|boolean',
        ]);

        // Store the data
        $todo = new Todo();

        $todo->title = $data['title'];
        $todo->description = $data['description'];
        $todo->due_date = $data['due_date'];
        $todo->completed = $data['completed'];
        $todo->user_id = 1;

        $todo->save();

        // If validation passes, continue
        return redirect()
            ->route('todos.index')
            ->with('success', 'Task created successfully!');

    }
}
