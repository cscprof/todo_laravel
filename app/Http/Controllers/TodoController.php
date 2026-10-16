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
        $todo_list = Todo::with('tags')->get();

        // "Dump and Die" prints the data and stops executing. Useful
        // for debugging and looking at intermediate values.
        // dd($todo_list);

        return $todo_list;;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $todo_list = Todo::where('id', $id)->get();
        return $todo_list;;
    }
}
