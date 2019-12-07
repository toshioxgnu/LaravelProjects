<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

class TodosController extends Controller
{

   public function index(){ 


   	// fetch todos from database and display in page


   	return view('todos.index') -> with('todos', Todo::all());
   }

   public function show(Todo $todo){
   	
   	return view('todos.show')->with('todo', $todo);	
   }

   public function create ( ){
   	return view('todos.create');
   }

   public function store(){
      $this -> validate(request(), [
         'name' => 'required|min:6|max:30',
         'description' => 'required' 

      ]);
      $data = request()->all();
      $todo = new Todo();
      $todo->name = $data['name'];
      $todo->description = $data['description'];
      $todo->completed = false;
      $todo->save();
      session()->flash('success', 'Created succesfuly.');
      return redirect('/todos');
   }

   public function edit(Todo $todo){

      return view('todos.edit')-> with('todo', $todo);
   }

   public function update()
   {
       $this -> validate(request(), [
         'name' => 'required|min:6|max:30',
         'description' => 'required' 

      ]);
      $data = request()->all();

      $todo = Todo::find($data['id']);

      $todo -> name = $data['name'];
      $todo -> description = $data['description'];

      $todo -> save(); 
      session()->flash('success', 'Updated succesfuly.');
      
      return redirect('/todos');
      
   }


   public function delete(Todo $todo){
      $todo -> delete($todo);
      session()->flash('danger', 'Register Deleted.');
      return redirect('/todos');
   }
   public function complete(Todo $todo){
      $todo -> completed = !$todo -> completed;
      $todo -> save();
      session()->flash('completed');
      return redirect('/todos');
   }
}
