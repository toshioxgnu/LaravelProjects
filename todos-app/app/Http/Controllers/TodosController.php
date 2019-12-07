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
      dd(request()->all()); 
   }
}
