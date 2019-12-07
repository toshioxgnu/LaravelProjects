@extends('layouts.app')


@section('title')
	Todos
@endsection

@section('content')
		<h1 class="text-center">
		Todos Page 
	</h1>
	
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card card-default">
		<div class="card-header">Todos</div>
		<div class="card-body">
			<ul class="list-group">
		@foreach($todos as $todo)
		<li class="list-group-item"> {{$todo -> name}} 
			
			@if( $todo->completed == 'completed')
					<a href="/todos/{{$todo->id}}/complete" name="completed"><button class="btn btn-default btn-sm float-right"><i class="far fa-check-square"></i></button></a>
			@else
					<a href="/todos/{{$todo->id}}/complete" name="completed"><button class="btn btn-default btn-sm float-right"><i class="fas fa-check-square"></i></button></a>	
			@endif

			<a href="/todos/{{$todo->id}} "><button class="btn btn-primary btn-sm float-right mr-2"><i class="fas fa-eye"></i></button></a>

		</li>
		
		@endforeach
	</ul>
		</div>
	</div>
		</div>
	</div>
@endsection