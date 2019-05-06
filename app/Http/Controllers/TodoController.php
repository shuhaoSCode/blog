<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    protected function index()
    {
        $todos = Todo::all();
        return view('todo.index', [
            'todos' => $todos
        ]);
    }

    public function update(Request $request)
    {
//        $todo = new Todo();
//        $todo->title = $request->title;
//        $todo->save();

//        $todo = Todo::create([
//            'title' => $request->title,
//        ]);
        $request->validate([
            'title' => 'min:3',
        ]);

        $todo = Todo::create($request->all());
        return redirect('todo');
    }

    public function destroy(Request $request, $id)
    {
        Todo::find($id)->delete();
        return redirect('todo');
    }
}
