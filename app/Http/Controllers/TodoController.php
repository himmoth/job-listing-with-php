<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TodoController extends Controller
{
    public function index(Todo $edit){

        $todos = Todo::where('status',1)->latest()->get();
        $dones = Todo::where('status',2)->latest()->get();
     
      
      

        return view('todos.index',
    [
        'todos' => $todos,
        'dones' => $dones,
        'edit' => $edit,

      


    ]);
    }

    public function store(Request $request){
       
        $this->validate($request,[
            'todo' => 'required|min:3'
        ]);

        $todo = new Todo();
        $todo->todo = $request->todo;
        $todo->save();

        return \redirect()->route('todo')->with('success', 'New created todo ');
    }
    public function finished(Request $request){
       
       $finish = Todo::find($request->id)->update(['status' =>2]);

        return \redirect()->route('todo')->with('success', 'Todo is done ');
    }
    public function edit(Todo $todo){
       
       
        return view('todos.edit',
    [
      'todo'=>$todo,
    ]);
     }
   
    public function destroy(Request $request){
       
        $finish = Todo::find($request->id)->delete();
         return \redirect()->route('todo')->with('success', 'Todo is deleted! ');
     }
}
