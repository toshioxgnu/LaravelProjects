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

   public function show($todoId){
   	
   	return view('todos.show')->with('todo', Todo::find($todoId));	
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
      return redirect('/todos');
   }

   public function edit($todoId){
      $todo = Todo::find($todoId);

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
      
      return redirect('/todos');
      
   }


   public function delete($todoId){
      $todo = Todo::find($todoId);
      $todo -> delete();
      return redirect('/todos');
   }
}
