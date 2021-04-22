<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    public function index(){
       $todoList = Todo::orderBy('id','desc')->get();
       return view('index',compact('todoList'));
    }

    public function create(){
       return view('create');
    }

    public function show($id){
       $todo = Todo::find($id);
       return view('show',compact('todo'));
    }

    public function changeState(Request $request){
      $todo = Todo::findOrFail($request->id);
      if ($request->state == 0) {
        $state = 0;
      }else{
        $state = 1;
      }
      $todo->state = $state;
      $todo->save();
      toastr()->success('Data has been update successfully!');
      return redirect()->back();
    }

    public function store(Request $request){
        $todo = new Todo();
        $todo->todo        = $request->todo;
        $todo->description = $request->description;
        $todo->state = false;

        $todo->save();
        toastr()->success('Data has been saved successfully!');
        return redirect()->back();
    }
}
