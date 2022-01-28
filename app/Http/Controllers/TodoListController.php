<?php

namespace App\Http\Controllers;

use App\Models\TodoList;
use Illuminate\Http\Request;

class TodoListController extends Controller
{

    public function index()
    {
        $todos = TodoList::all();
        return view('todo-list', compact('todos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:5'
        ],
        [
           'name.required' => 'O nome é requirido!'
        ]);

        $toDoList       = new TodoList();
        $toDoList->name = $request->post('name');
        $toDoList->save();

        return redirect()->route('todo');
    }

    public function show($id)
    {
        // $todo = TodoList::where('id', $id)->first();
        $todo = TodoList::find($id);

        return view('show', compact('todo'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|min:5'
        ],
        [
           'name.required' => 'O nome é requirido!'
        ]);

        $todo = TodoList::find($id);
        $todo->name = $request->post('name');
        // $todo->update();
        $todo->save();

        return redirect()->route('todo');
    }

    public function delete($id)
    {
        TodoList::find($id)->delete();

        return redirect()->route('todo');
    }
}
